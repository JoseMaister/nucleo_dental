<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/lang/{lang}', [LanguageController::class, 'switchLang'])->name('language.switch');