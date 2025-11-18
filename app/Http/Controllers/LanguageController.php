<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        if (!in_array($lang, ['en', 'es'])) {
            $lang = 'en';
        }

        // Store the locale in the session
        Session::put('locale', $lang);
        
        // Set the application locale for the current request
        App::setLocale($lang);
        
        // Log the language switch
        Log::info('Language switched', [
            'new_locale' => $lang,
            'session_locale' => session('locale'),
            'app_locale' => app()->getLocale(),
            'previous_url' => url()->previous(),
        ]);
        
        // Set a cookie that expires in 1 year
        $cookie = cookie()->forever('locale', $lang);
        
        // Redirect back to the previous page with the new locale cookie
        return redirect()->back()->withCookie($cookie);
    }
}