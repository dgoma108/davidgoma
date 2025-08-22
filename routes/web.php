<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */



// routes/web.php
// Route::get('/', HomeController::class)->name('home');
// Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
// Route::get('/modern-bootstrap', ModernBootstrapController::class)->name('modern-bootstrap');
// Route::get('/contact', ContactController::class)->name('contact');
Route::get('/', fn() => view('welcome'))->name('home');
Route::get('/portfolio', fn() => view('portfolio'))->name('portfolio.index');
Route::get('/modern-bootstrap', fn() => view('modern-bootstrap'))->name('modern-bootstrap');
Route::get('/contact', fn() => view('contact'))->name('contact');

// Docs routes
Route::prefix('docs')->name('docs.')->group(function () {
    // Route::get('/', [DocsController::class, 'index'])->name('index');
    Route::get('/overview', fn() => view('docs/overview'))->name('overview');
    Route::get('/typography', fn() => view('docs/typography'))->name('typography');
    Route::get('/banners', fn() => view('docs/banners'))->name('banners');
    Route::get('/buttons', fn() => view('docs/buttons'))->name('buttons');
    Route::get('/components', fn() => view('docs/components'))->name('components');
    Route::get('/navbar', fn() => view('docs/navbar'))->name('navbar');
    Route::get('/cards', fn() => view('docs/cards'))->name('cards');
    Route::get('/utilities', fn() => view('docs/utilities'))->name('utilities');
    Route::get('/tables', fn() => view('docs/tables'))->name('tables');
    Route::get('/cookies-banner', fn() => view('docs/cookies-banner'))->name('cookies-banner');
    Route::get('/examples', fn() => view('docs/examples'))->name('examples');

    Route::get('/forms/overview', fn() => view('docs/forms'))->name('forms.overview');
    // Route::get('/components', [DocsController::class, 'components'])->name('components');
    // Route::get('/utilities', [DocsController::class, 'utilities'])->name('utilities');
    // Route::get('/examples', [DocsController::class, 'examples'])->name('examples');
});
