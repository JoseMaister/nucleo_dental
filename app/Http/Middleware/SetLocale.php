<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // Get the locale from the session or use the default
        $locale = session('locale', config('app.locale'));
        
        // Set the application locale
        app()->setLocale($locale);
        
        // Set the locale in the config to ensure it persists
        config(['app.locale' => $locale]);
        
        // Set the locale for carbon and other date/time functions
        \Carbon\Carbon::setLocale($locale);
        
        // Log the current locale settings
        \Log::info('Locale set', [
            'session_locale' => session('locale'),
            'app_locale' => app()->getLocale(),
            'config_locale' => config('app.locale'),
        ]);
        
        return $next($request);
    }