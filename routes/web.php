<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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



Route::get('/', 'PageController@index')->name('home');
Route::get('/about-us', 'PageController@about')->name('about-us');
Route::get('/services', 'PageController@services')->name('services');
Route::get('/careers', 'PageController@careers')->name('careers');
Route::get('/contact', 'PageController@contact')->name('contact');
