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
    
    Route::get('/dental-implants', function () {
        return view('dental-implants');
    })->name('dental-implants');
    
    Route::get('/full-arch-implants', function () {
        return view('full-arch-implants');
    })->name('full-arch-implants');

    Route::get('/root-canal-treatment', function () {
        return view('endodontics');
    })->name('endodontics');
    Route::get('/safety-clinical-standards', function () {
        return view('safety'); // o 'pages.safety'
    })->name('safety');

    Route::get('/smile-gallery', function () {
        return view('gallery');
    })->name('gallery');

    Route::get('/meet-doctors', function () {
        return view('meet-doctors');
    })->name('meet-doctors');

    Route::get('/meet-doctors/dr-ernesto-moran', function () {
        return view('dr-ernesto-moran');
    })->name('dr-ernesto-moran');

    // Individual Service Pages
    Route::get('/services/dental-implants', function () { return view('services.dental-implants'); })->name('dental-implants');
    Route::get('/services/zygomatic-implants', function () { return view('services.zygomatic-implants'); })->name('zygomatic-implants');
    Route::get('/services/full-mouth-restoration', function () { return view('services.full-mouth-restoration'); })->name('full-mouth-restoration');
    Route::get('/services/all-on-4-implants', function () { return view('services.full-arch-implants'); })->name('full-arch-implants');
    Route::get('/services/cosmetic-dentistry', function () { return view('services.cosmetic-dentistry'); })->name('cosmetic-dentistry');
    Route::get('/services/porcelain-veneers', function () { return view('services.porcelain-veneers'); })->name('porcelain-veneers');
    Route::get('/services/crowns-and-bridges', function () { return view('services.crowns-bridges'); })->name('crowns-bridges');
    Route::get('/services/dentures', function () { return view('services.dentures'); })->name('dentures');
    Route::get('/services/snap-on-dentures', function () { return view('services.snap-on-dentures'); })->name('snap-on-dentures');
    Route::get('/services/orthodontics', function () { return view('services.orthodontics'); })->name('orthodontics');
    Route::get('/services/pediatric-dentistry', function () { return view('services.pediatric-dentistry'); })->name('pediatric-dentistry');
    Route::get('/services/periodontal-treatment', function () { return view('services.periodontal-treatment'); })->name('periodontal-treatment');
    Route::get('/services/maxillofacial-surgery', function () { return view('services.maxillofacial-surgery'); })->name('maxillofacial-surgery');
    Route::get('/services/endodontics', function () { return view('services.endodontics'); })->name('endodontics');
    Route::get('/services/bone-grafting', function () { return view('services.bone-grafting'); })->name('bone-grafting');
    Route::get('/services/general-dentistry', function () { return view('services.general-dentistry'); })->name('general-dentistry');
    Route::get('/services/sedation-dentistry', function () { return view('services.sedation-dentistry'); })->name('sedation-dentistry');

    // Contact Form Submission
    Route::post('contact', [ContactController::class, 'submit'])->name('contact.submit');
});