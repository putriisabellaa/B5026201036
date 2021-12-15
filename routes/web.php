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
Route::get('try', function () {
    return view('try-blade');
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
    Route::get('/cari', 'PegawaiController@cari');
    Route::get('/tambah', 'pegawaiController@tambah');
    Route::post('/store', 'PegawaiController@store');
    Route::get('/edit/{id}', 'PegawaiController@edit');
    Route::post('/update', 'PegawaiController@update');
    Route::get('/hapus/{id}', 'PegawaiController@hapus');
    Route::get('/detail/{id}', 'PegawaiController@view');
});
//Route buat Mutasi (CRUD)
Route::prefix('mutasi')->group(function () {
    Route::get('/', 'MutasiController@index');
    Route::get('/cari', 'MutasiController@cari');
    Route::get('/tambah', 'MutasiController@tambah');
    Route::post('/store', 'MutasiController@store');
    Route::get('/edit/{id}', 'MutasiController@edit');
    Route::post('/update', 'MutasiController@update');
    Route::get('/hapus/{id}', 'MutasiController@hapus');
    Route::get('/detail/{id}', 'MutasiController@view');
});

//Route buat Absen (CRUD)
Route::prefix('absen')->group(
    function () {
        Route::get('/', 'AbsenController@index');
        Route::get('/cari', 'AbsenController@cari');
        Route::get('/tambah', 'AbsenController@tambah');
        Route::post('/store', 'AbsenController@store');
        Route::get('/edit/{id}', 'AbsenController@edit');
        Route::post('/update', 'AbsenController@update');
        Route::get('/hapus/{id}', 'AbsenController@hapus');
        Route::get('/detail/{id}', 'AbsenController@view');
    }
);

//Route buat Kaos (CRUD)
Route::prefix('kaos')->group(
    function () {
        Route::get('/', 'KaosController@index');
        Route::get('/cari', 'KaosController@cari');
        Route::get('/tambah', 'KaosController@tambah');
        Route::post('/store', 'KaosController@store');
        Route::get('/edit/{id}', 'KaosController@edit');
        Route::post('/update', 'KaosController@update');
        Route::get('/hapus/{id}', 'KaosController@hapus');
        Route::get('/detail/{id}', 'KaosController@view');
    }
);

//Route buat Karyawan (Praktikum) (CRUD)
Route::prefix('praktikum')->group(function () {
    Route::get('/', 'PraktikumController@index');
    Route::get('/cari', 'PraktikumController@cari');
    Route::get('/tambah', 'PraktikumController@tambah');
    Route::post('/store', 'PraktikumController@store');
    Route::get('/edit/{NIP}', 'PraktikumController@edit');
    Route::post('/update', 'PraktikumController@update');
    Route::get('/hapus/{NIP}', 'PraktikumController@hapus');
    Route::get('/detail/{NIP}', 'PraktikumController@view');
});
