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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::post('/contact', 'WelcomeController@contact')->name('contact');

//Auth::routes();
Route::group([
    'prefix' => 'login',
    'as' => 'login.'
], function () {
    Route::get('/discord', 'Auth\LoginController@redirectToProvider')->name('discord');
    Route::get('/discord/callback', 'Auth\LoginController@handleProviderCallback')->name('discord.callback');
});

Route::get('logout')->uses('Auth\LogoutController@logout')->name('logout');

Route::group([
    'prefix' => 'account',
], function () {
    Route::get('/', function(){
        dd('yes');
    })->name('account');
});

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
