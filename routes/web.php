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
Route::get('/auth', 'LoginController@authorizes')->name('login.sso');
Route::get('/sso', 'LoginController@accessToken');
Route::get('/logout/sso', 'LoginController@doLogout')->name('logout.sso');

// Aplikasi Pelaporan Gratifikasi
Route::group(['namespace' => 'Apasi', 'as' => 'apasi.'], function () {
    Route::get('/', 'HomeController@index')->name('home');

    // Route For Role Admin
    Route::group(['namespace' => 'Admin', 'as' => 'admin.'], function () {
        Route::group(['prefix' => 'data-user'], function () {
            Route::get('/', 'UserController@index');
            Route::get('/form', 'UserController@form');
            Route::post('/save', 'UserController@store');
        });
        Route::group(['prefix' => 'data-menu'], function () {
            Route::get('/', 'MenuController@index');
            Route::get('/form', 'MenuController@form');
            Route::post('/save', 'MenuController@store');
        });
    });

    // Route For Role User
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        Route::group(['prefix' => 'cara-pelaporan'], function () {
            Route::get('/', 'CaraPengaduanController@index')->name('caralapor');
        });
        Route::group(['prefix' => 'form-laporan'], function () {
            Route::get('/', 'PelaporanController@index')->name('formlapor');
            Route::post('/save', 'PelaporanController@store')->name('save');
        });
    });
});








Route::resource('pengaduan1', 'Pengaduan1Controller')->middleware('auth');
Route::get('/pengaduan1/{id}/delete', 'Pengaduan1Controller@destroy')->middleware('auth');
Route::resource('pengguna1', 'Pengguna1Controller')->middleware('auth');

Route::resource('pengaduan', 'PengaduanController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Logout dibuat dengan cara manual
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

