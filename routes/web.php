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
});
Route::get('/projects', function () {
    return view('project');
})->name('route.project');
Route::get('/contact-me', function () {
    return view('contact');
})->name('route.contact');
Route::get('/about-me', function () {
    return view('about');
})->name('route.about');
