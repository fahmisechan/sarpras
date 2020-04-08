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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route kerusakan
Route::get('/kerusakan','KerusakanController@kerusakan');
Route::post('/kerusakan/create','KerusakanController@create');
Route::get('/rusak','KerusakanController@index');
Route::get('/postrusak','KerusakanController@postrusak');
Route::get('/rusak/hapus/{id}','KerusakanController@delete');

// Route kehilangan
Route::get('/hilang','KehilanganController@index');
Route::post('/kehilangan/create','KehilanganController@create');
Route::get('/posthilang','KehilanganController@posthilang');
Route::get('/kehilangan','KehilanganController@kehilangan');
Route::get('/hilang/hapus/{id}','KehilanganController@delete');


Route::get('/barang', 'barangcontroller@index')->name('barang');
Route::get('/inputbarang', 'barangcontroller@create');
Route::post('/inputbarang/store', 'barangcontroller@store')->name('barang.insert');
Route::get('/barang/edit/{id}', 'barangcontroller@edit');
Route::put('/barang/update/{id}', 'barangcontroller@update');
Route::get('/barang/hapus/{id}', 'barangcontroller@destroy');

Route::get('/pinjam', 'pinjamcontroller@index')->name('pinjam');
Route::get('/pilih', 'pinjamcontroller@pilih')->name('pilih');
Route::get('/pinjam/pilih/{id}', 'pinjamcontroller@selected');
Route::post('/pinjam/input', 'pinjamcontroller@store');

Route::get('/kembali', 'kembalicontroller@index')->name('kembali');

Route::get('/kembali/hapus/{id}', 'kembalicontroller@destroy');

Route::get('/kelas', 'kelascontroller@index')->name('kelas');
Route::get('/kelas/create', 'kelascontroller@create');
Route::post('/kelas/store', 'kelascontroller@store');
Route::get('/kelas/edit/{id}', 'kelascontroller@edit');
Route::put('/kelas/update/{id}', 'kelascontroller@update');
Route::get('/kelas/destroy/{id}', 'kelascontroller@destroy');

Route::get('/lokasi', 'lokasicontroller@index')->name('lokasi');
Route::get('/lokasi/cek/{id}', 'lokasicontroller@cek');

Route::get('/user', 'usercontroller@index')->name('user');
Route::get('/user/edit/{id}','usercontroller@edit');
Route::put('/user/update/{id}', 'usercontroller@update');
Route::get('/user/destroy/{id}', 'usercontroller@destroy');
Route::get('/user/create', 'usercontroller@create');
Route::post('/user/store', 'usercontroller@store');
