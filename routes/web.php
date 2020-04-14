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

Route::get('/', 'HomeController@index')->name('home');
Route::get('blogpost', 'HomeController@blogpost')->name('blogpost');
Route::get('contact', 'HomeController@contact')->name('contact');
Route::get('category', 'HomeController@category')->name('category');


Route::get ( '/redirect/{service}', 'Auth\SocialAuthController@redirect' );
Route::get ( '/callback/{service}', 'Auth\SocialAuthController@callback' );

Auth::routes(['verify' => true]);

//Route::get('/home', 'HomeController@index')->name('home');
