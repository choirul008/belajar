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


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/profile', function() {
    return view('userprofile');
})->name('profile')->middleware('auth');

Route::get('/lock', function() {
    return view('lock');
})->name('lock')->middleware('auth');

// Route::get('/lang', function() {
//     return view('lang');
// })->name('lang')->middleware('auth');

// // Switch Language
// Route::get('lang/{language}', 'LocalizationController@switch')->name('localization.switch');