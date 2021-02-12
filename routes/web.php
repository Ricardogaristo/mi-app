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

Route::view('/', 'home')->name('home');
Route::view('/Features', 'Features')->name('Features');
Route::view('/Enterprise', 'Enterprise')->name('Enterprise');
Route::view('/Support', 'Support')->name('Support');
Route::view('/Pricing', 'Pricing')->name('Pricing');
Route::view('/is', 'is')->name('is');
