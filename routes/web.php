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
Route::get('Jawaban/create/{id}', 'JawabanController@create')->name('tambah_jawaban');
Route::post('jawaban/', 'JawabanController@store')->name('simpan_jawaban');
Route::get('jawaban/{id}', 'JawabanController@index')->name('index');
