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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pegawai',[
    'uses' => 'App\Http\Controllers\PegawaiController@index',
    'as' => 'dashboardPegawai'
]);

Route::get('/pegawai/tambah',[
    'uses' => 'App\Http\Controllers\PegawaiController@tambah',
    'as' => 'tambahPegawai'
]);
Route::post('/pegawai/store',[
    'uses' => 'App\Http\Controllers\PegawaiController@store',
    'as' => 'simpanDataPegawai'
]);
Route::get('/pegawai/edit/{id}',[
    'uses' => 'App\Http\Controllers\PegawaiController@edit',
    'as' => 'editDataPegawai'
]);
Route::post('/pegawai/update',[
    'uses' => 'App\Http\Controllers\PegawaiController@update',
    'as' => 'editDataPegawai'
]);
Route::get('/pegawai/hapus/{id}',[
    'uses' => 'App\Http\Controllers\PegawaiController@hapus',
    'as' => 'editDataPegawai'
]);
