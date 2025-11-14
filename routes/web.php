<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/technology', function () {
    return view('technology');
})->name('technology');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/financing', function () {
    return view('financing');
})->name('financing');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Contact Form Submission
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Language Switcher
Route::get('/lang/{lang}', [LanguageController::class, 'switchLang'])->name('language.switch');