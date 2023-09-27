<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::get('/About', function () {
    return view('about');
})->name('about');
Route::get('/Service', function () {
    return view('service');
})->name('service');
Route::get('/Product', function () {
    return view('product');
})->name('Product');
Route::get('/Team', function () {
    return view('team');
})->name('team');
Route::get('/Why', function () {
    return view('why');
})->name('why');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

