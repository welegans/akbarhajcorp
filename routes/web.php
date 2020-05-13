<?php

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

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('umrahpackages', function () {
    return view('umrahpackages');
})->name('umrahpackages');

Route::get('abouthaj', function () {
    return view('abouthaj');
})->name('abouthaj');

Route::get('aboutumrah', function () {
    return view('aboutumrah');
})->name('aboutumrah');


Route::get('hajpackages', function () {
    return view('hajpackages');
})->name('hajpackages');

Route::get('contact', function () {
    return view('contact');
})->name('contact');
