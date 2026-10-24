<?php

namespace Tests\Unit;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use Tests\TestCase;

class MessageTranslationsTest extends TestCase
{
    public function test_every_english_message_key_has_a_spanish_translation(): void
    {
        $english = require resource_path('lang/en/messages.php');
        $spanish = require resource_path('lang/es/messages.php');

        $this->assertMessageTreeCovered($english, $spanish);
    }

    public function test_static_blade_message_references_exist_in_both_locales(): void
    {
        $locales = [
            'en' => require resource_path('lang/en/messages.php'),
            'es' => require resource_path('lang/es/messages.php'),
        ];

        $views = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator(resource_path('views'))
        );

        foreach ($views as $view) {
            if (! $view->isFile() || ! str_ends_with($view->getFilename(), '.blade.php')) {
                continue;
            }

            $contents = file_get_contents($view->getPathname());
            preg_match_all('/__\(\s*[\'"]messages\.([^\'"]+)[\'"]/', $contents, $matches);

            foreach ($matches[1] as $key) {
                if (str_ends_with($key, '_') || str_ends_with($key, '.') || str_contains($key, '$') || str_contains($key, '{')) {
                    continue;
                }

                foreach ($locales as $locale => $messages) {
                    $this->assertNotNull(
                        $this->messageValue($messages, $key),
                        sprintf('Missing %s translation for messages.%s in %s', $locale, $key, $view->getPathname())
                    );
                }
            }
        }
    }

    private function assertMessageTreeCovered(array $english, array $spanish, string $path = ''): void
    {
        foreach ($english as $key => $value) {
            $currentPath = $path === '' ? (string) $key : $path.'.'.$key;

            $this->assertArrayHasKey($key, $spanish, sprintf('Missing Spanish key: %s', $currentPath));

            if (is_array($value)) {
                $this->assertIsArray($spanish[$key], sprintf('Spanish key has a different shape: %s', $currentPath));
                $this->assertMessageTreeCovered($value, $spanish[$key], $currentPath);
            } else {
                $this->assertIsString($spanish[$key], sprintf('Spanish message must be a string: %s', $currentPath));
                $this->assertNotSame('', trim($spanish[$key]), sprintf('Spanish message is empty: %s', $currentPath));
            }
        }
    }

    private function messageValue(array $messages, string $key): mixed
    {
        foreach (explode('.', $key) as $segment) {
            if (! is_array($messages) || ! array_key_exists($segment, $messages)) {
                return null;
            }

            $messages = $messages[$segment];
        }

        return $messages;
    }
}
