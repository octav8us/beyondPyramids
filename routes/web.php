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

/*Route::get('/', function () {
    return view('home');
});*/

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cities/create', [App\Http\Controllers\CitiesController::class, 'create']);

Route::post('/city/post','App\Http\Controllers\CitiesController@store');
Route::post('/place/post','App\Http\Controllers\placesController@store');
Route::post('/placefav/{place}','App\Http\Controllers\PlacesFavController@store');
Route::post('/cityfav/{city}','App\Http\Controllers\CityFavController@store');
Route::post('/placevisit/{place}','App\Http\Controllers\PlacesFavController@store');
Route::post('/cityvisit/{city}','App\Http\Controllers\CityFavController@store');
Route::get('/search/', 'App\Http\Controllers\HomeController@search')->name('search');
Route::get('/places/create', [App\Http\Controllers\placesController::class, 'create']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
