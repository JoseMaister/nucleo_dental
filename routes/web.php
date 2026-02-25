<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['web']
], function() {
    // Main Pages
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('about', function () {
        return view('about');
    })->name('about');

    Route::get('technology', function () {
        return view('technology');
    })->name('technology');

    Route::get('services', function () {
        return view('services');
    })->name('services');

    Route::get('financing', function () {
        return view('financing');
    })->name('financing');

    Route::get('contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('dental-tourism', function () {
        return view('dental_tourism');
    })->name('dental-tourism');

    Route::get('blog-educativo', function () {
        return view('blog_educativo');
    })->name('blog-educativo');

    // Contact Form Submission
    Route::post('contact', [ContactController::class, 'submit'])->name('contact.submit');
});