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

Route::group(['prefix' => 'admin'],function() {
  Route::get('new/create','Admin\NewController@add');
  //セクション9課題No4
  Route::get('profile/create','Admin\ProfileController@add');
  Route::get('profile/edit','Admin\ProfileController@edit');
});


//課題No3
Route::group(['prefix' => 'XXX'], function() {
  Route::get('XXX/XXX','XXX\AAAController@bbb');
});
