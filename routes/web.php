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
    return redirect('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('register', 'HomeController@index')->name('register');

// Agenda
Route::resource('Agenda', 'AgendaController');
Route::get('/Agenda/{Agenda}/delete', 'AgendaController@destroy');
Route::put('/Agenda/{Agenda}/edit', 'AgendaController@update');

// Berita
Route::resource('Berita', 'BeritaController');
Route::get('/Berita/{Berita}/delete', 'BeritaController@destroy');
Route::put('/Berita/{Berita}/edit', 'BeritaController@update');

// Pesan
Route::resource('Pesan', 'PesanController');
Route::get('/Pesan/{Pesan}/delete', 'PesanController@destroy');

// File
Route::resource('File', 'FileController');
Route::get('/File/{File}/delete', 'FileController@destroy');
Route::put('/File/{File}/edit', 'FileController@update');

// Guest
Route::get('pengumuman', 'HomeController@index')->name('pengumuman');
Route::get('tamu', 'HomeController@index')->name('tamu');