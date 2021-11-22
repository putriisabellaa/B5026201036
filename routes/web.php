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
Route::get('praktikum1', function () {
    return view('prak1web');
});
Route::get('tugas4_jquery', function () {
    return view('tugas4web');
});
Route::get('praktikum2', 'ViewController@showPraktikum2');
Route::get('ets', 'ViewController@showEts');
Route::get('tugasphp', 'ViewController@showTugasPhp');
Route::post('calculation', 'ViewController@calcFibonnaci');

//Route buat Pegawai (CRUD)
Route::prefix('pegawai')->group(function () {
    Route::get('/', 'pegawaiController@index');
    Route::get('/tambah', 'pegawaiController@tambah');
    Route::post('/store', 'PegawaiController@store');
    Route::get('/edit/{id}', 'PegawaiController@edit');
    Route::post('/update', 'PegawaiController@update');
    Route::get('/hapus/{id}', 'PegawaiController@hapus');
});
//Route buat Mutasi (CRUD)
Route::prefix('mutasi')->group(function () {
    Route::get('/', 'MutasiController@index');
    Route::get('/tambah', 'MutasiController@tambah');
    Route::post('/store', 'MutasiController@store');
    Route::get('/edit/{id}', 'MutasiController@edit');
    Route::post('/update', 'MutasiController@update');
    Route::get('/hapus/{id}', 'MutasiController@hapus');
});
