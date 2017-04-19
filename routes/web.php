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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

  Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
  });

  Route::prefix('superAdmin')->group(function() {
    Route::get('/login', 'Auth\SuperAdminLoginController@showLoginForm')->name('superAdmin.login');
    Route::post('/login', 'Auth\SuperAdminLoginController@login')->name('superAdmin.login.submit');
    Route::get('/', 'SuperAdminController@index')->name('superAdmin.dashboard');
  });
