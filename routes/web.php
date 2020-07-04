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

Route::get('pertanyaan', 'PertanyaanController@index')->name('index');
Route::get('pertanyaan/create', 'PertanyaanController@create')->name('tambah_pertanyaan');
Route::post('pertanyaan', 'PertanyaanController@store')->name('simpan');
Route::get('pertanyaan/detail/{id}', 'PertanyaanController@show')->name('show');
Route::get('pertanyaan/{id}', 'PertanyaanController@edit')->name('edit');
Route::put('pertanyaan/{id}', 'PertanyaanController@update')->name('update');
Route::delete('pertanyaan/{id}', 'PertanyaanController@destroy')->name('hapus');


// route jawaban
Route::get('Jawaban/create/{id}', 'JawabanController@create')->name('tambah_jawaban');
Route::get('jawaban', 'JawabanController@index')->name('index');
Route::post('jawaban/', 'JawabanController@store')->name('simpan_jawaban');
Route::get('jawaban/{id}', 'JawabanController@edit')->name('edit');
Route::put('pertanyaan/{id}', 'JawabanController@update')->name('update');
Route::delete('pertanyaan/{id}', 'jawabanController@destroy')->name('hapus');
