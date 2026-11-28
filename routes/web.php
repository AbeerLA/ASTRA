<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\HeroSlideController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\TourismDestinationController;
use App\Http\Controllers\Admin\TourismPackageController;
use App\Http\Controllers\Admin\PillarController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\SettingController;

use App\Models\TourismDestination;
use App\Models\HeroSlide;
use App\Models\Facility;
use App\Models\Pillar;
use App\Models\News;

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

    $destinations = TourismDestination::where('is_active', true)
        ->orderBy('sort_order')
        ->get();

    $pillars = Pillar::where('is_active', true)
        ->orderBy('sort_order')
        ->get();

    $newsItems = News::where('status', 'published')
        ->where(function ($query) {
            $query->whereNull('published_at')
                ->orWhere('published_at', '<=', now());
        })
        ->orderByDesc('published_at')
        ->take(3)
        ->get();

    return view('pages.home', compact(
        'slides',
        'facilities',
        'destinations',
        'pillars',
        'newsItems'
    ));

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
| ADMIN AUTHENTICATION
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    Route::get('/login', [LoginController::class, 'create'])
        ->name('login');

    Route::post('/login', [LoginController::class, 'store'])
        ->name('login.store');

});

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');


/*
|--------------------------------------------------------------------------
| ADMIN DASHBOARD
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
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

        Route::get('/settings', [SettingController::class, 'index'])
            ->name('settings.index');

        Route::post('/settings', [SettingController::class, 'update'])
            ->name('settings.update');

    });