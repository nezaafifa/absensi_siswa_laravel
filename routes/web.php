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
    return view('index');

})->middleware('auth');

//rombel 
    route::get('/rombel','App\http\Controllers\RombelController@index')->name('rombel');
    route::get('/rombel/create','App\http\Controllers\RombelController@create');
    route::post('/rombel/store','App\http\Controllers\RombelController@store');
    route::get('/rombel/edit/{id_rombel}','App\http\Controllers\RombelController@edit');
    route::post('/rombel/update/{id_rombel}','App\http\Controllers\RombelController@update');
    route::get('/rombel/destroy/{id_rombel}','App\http\Controllers\RombelController@destroy');

//siswa
    route::get('/siswa','App\Http\Controllers\SiswaController@index')->name('siswa');
    route::get('/siswa/create','App\Http\Controllers\SiswaController@create');
    route::post('/siswa/store','App\http\Controllers\SiswaController@store');
    route::get('/siswa/edit/{id_siswa}','App\http\Controllers\SiswaController@edit');
    route::post('/siswa/update/{id_siswa}','App\http\Controllers\SiswaController@update');
    route::get('/siswa/destroy/{id_siswa}','App\http\Controllers\SiswaController@destroy');

//rayon
    route::get('/rayon','App\http\Controllers\RayonController@index')->name('rayon');
    route::get('/rayon/create','App\http\Controllers\RayonController@create');
    route::post('/rayon/store','App\http\Controllers\RayonController@store');
    route::get('/rayon/edit/{id_rayon}','App\http\Controllers\RayonController@edit');
    route::post('/rayon/update/{id_rayon}','App\http\Controllers\RayonController@update');
    route::get('/rayon/destroy/{id_rayon}','App\http\Controllers\RayonController@destroy');

//absen
    route::get('/absen','App\http\Controllers\AbsenController@index')->name('absen');
    route::get('/absen/create','App\http\Controllers\AbsenController@create');
    route::get('/cari/siswa','App\http\Controllers\AbsenController@cari')->name('cari');
    route::post('/absen/store','App\http\Controllers\AbsenController@store');

//login
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
