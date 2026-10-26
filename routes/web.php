<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::controller(PortfolioController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/clients', 'clients')->name('clients');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/album/{album}', 'album')->name('album')->where('album', '[a-z0-9-]+');
    Route::get('/placeholder/{album}/{number}.svg', 'placeholder')->name('placeholder')
        ->where(['album' => '[a-z0-9-]+', 'number' => '[0-9]+']);
    Route::get('/sitemap.xml', 'sitemap')->name('sitemap');

    // Portfolio sections (/suits, /knitwear, /e-commerce) come from config/portfolio.php.
    Route::get('/{category}', 'category')->name('category')
        ->whereIn('category', array_keys(config('portfolio.categories', [])));
});
