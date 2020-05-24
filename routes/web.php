<?php

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
    return view('welcome');
});

Route::group(['prefix' => 'meigen'], function() {
    Route::get('index', 'MeigenController@main');
    Route::get('search', 'MeigenController@search');
    Route::get('new', 'MeigenController@new');
    Route::get('genre', 'MeigenController@search');
    Route::get('name', 'MeigenController@name');
    Route::get('man', 'MeigenController@man');
    Route::get('woman', 'MeigenController@woman');
    Route::get('genre/detail/{id}', 'MeigenController@detail');
    Route::get('ranking', 'MeigenController@ranking');
    Route::get('izin/{id}', 'MeigenController@izin');
});