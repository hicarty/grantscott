<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/people', function () {
    return view('people');
})->name('people');

Route::get('/places-and-spaces', function () {
    return view('places-and-spaces');
})->name('places-and-spaces');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/films', function () {
    return url('https://vimeo.com/user93899994');
})->name('films');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
