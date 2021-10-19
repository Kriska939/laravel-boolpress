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


Auth::routes();

// ROTTE CHE RAGGIUNGO SOLO SE SONO LOGGATA

Route::middleware('auth')->name('admin.')->prefix('admin')->namespace('Admin')->group(function(){

    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostController');
});


// GESTIONE DI TUTTE LE ROTTE DA GUEST 

Route::get("{any?}", function(){
    return view('guest.home');
})->where("any",".*");