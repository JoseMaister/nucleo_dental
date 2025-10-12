<?php
protected $middlewareGroups = [
    'web' => [
        \App\Http\Middleware\SetLocale::class,  // This should be first
        \Illuminate\Cookie\Middleware\EncryptCookies::class,
        \Illuminate\Session\Middleware\StartSession::class,
        // ... other middleware
    ],
];