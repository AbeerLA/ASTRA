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

// Public Website
Route::get('/', function () {
    $slides = HeroSlide::where('is_active', true)
        ->orderBy('sort_order')
        ->get();

    return view('pages.home', compact('slides'));
})->name('home');


// Admin Dashboard Routes
Route::prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard
        Route::get('/', [HeroSlideController::class, 'index'])
            ->name('dashboard');

        // Hero Slides
        Route::resource('hero-slides', HeroSlideController::class)
            ->except(['create', 'show', 'edit']);

        // Facilities
        Route::resource('facilities', FacilityController::class)
            ->except(['create', 'show', 'edit']);

        // Tourism Destinations
        Route::resource('tourism-destinations', TourismDestinationController::class)
            ->except(['create', 'show', 'edit']);

        // Tourism Packages
        Route::resource('tourism-packages', TourismPackageController::class)
            ->except(['create', 'show', 'edit']);

        // Pillars
        Route::resource('pillars', PillarController::class)
            ->except(['create', 'show', 'edit']);

        // News
        Route::resource('news', NewsController::class)
            ->except(['create', 'show', 'edit']);

        // FAQs
        Route::resource('faqs', FaqController::class)
            ->except(['create', 'show', 'edit']);
    });