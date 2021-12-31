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
    return view('new-age-front');
});

Route::prefix('theme')->name('theme.')->group(function () {
    Route::prefix('default')->name('default.')->group(function () {
        Route::get('/', function () {
            return view('welcome');
        });
    });
    Route::prefix('new-age')->name('new-age.')->group(function () {
        Route::get('/', function () {
            return view('new-age-front');
        });
    });
});
