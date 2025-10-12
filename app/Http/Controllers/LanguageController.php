<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        if (in_array($lang, ['en', 'es'])) {
            // Set the session
            session(['locale' => $lang]);
            
            // Set the application locale
            app()->setLocale($lang);
            
            // Set the locale in the config
            config(['app.locale' => $lang]);
            
            \Log::info('Language switched', [
                'new_locale' => $lang,
                'session_locale' => session('locale'),
                'app_locale' => app()->getLocale(),
                'config_locale' => config('app.locale'),
            ]);
        }
        
        return redirect()->back();
    }
}