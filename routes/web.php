<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HeroSlideController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\TourismDestinationController;
use App\Http\Controllers\Admin\TourismPackageController;
use App\Http\Controllers\Admin\PillarController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\FaqController;

use App\Models\HeroSlide;
use App\Models\Facility;


/*
|--------------------------------------------------------------------------
| PUBLIC WEBSITE
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', function () {

    $slides = HeroSlide::where('is_active', true)
        ->orderBy('sort_order')
        ->get();

    $facilities = Facility::where('is_active', true)
        ->orderBy('sort_order')
        ->get();

    return view('pages.home', compact('slides', 'facilities'));

})->name('home');


// Old Home URL
Route::redirect('/home', '/')
    ->name('home.index');


// Wisata Page
Route::view('/wisata', 'pages.wisata')
    ->name('wisata.index');


// Profil Desa
Route::redirect('/profil-desa', '/#tentang-desa')
    ->name('village-profile');


// Program
Route::redirect('/program-desa', '/#program-desa')
    ->name('village-tourism');


// Wisata from Header
Route::redirect('/wisata-kampung', '/wisata')
    ->name('village-programs');


// Berita
Route::redirect('/berita', '/#berita')
    ->name('news');


// Kontak
Route::redirect('/kontak', '/#footer')
    ->name('contact');

// Facilities Page
Route::view('/facilities', 'pages.fasilitas')
    ->name('facilities');

/*
|--------------------------------------------------------------------------
| ADMIN DASHBOARD
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/', [HeroSlideController::class, 'index'])
            ->name('dashboard');

        Route::resource('hero-slides', HeroSlideController::class)
            ->except(['create', 'show', 'edit']);

        Route::resource('facilities', FacilityController::class)
            ->except(['create', 'show', 'edit']);

        Route::resource('tourism-destinations', TourismDestinationController::class)
            ->except(['create', 'show', 'edit']);

        Route::resource('tourism-packages', TourismPackageController::class)
            ->except(['create', 'show', 'edit']);

        Route::resource('pillars', PillarController::class)
            ->except(['create', 'show', 'edit']);

        Route::resource('news', NewsController::class)
            ->except(['create', 'show', 'edit']);

        Route::resource('faqs', FaqController::class)
            ->except(['create', 'show', 'edit']);

    });