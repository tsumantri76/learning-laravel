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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ubah/{id}', 'HomeController@ubah')->name('ubah_pass');
Route::get('/setting', 'HomeController@setting')->name('setting')->middleware('checkrole');
Route::post('/simpan', 'HomeController@simpan')->name('simpan');
