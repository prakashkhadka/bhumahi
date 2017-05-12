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

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', 'IndexController@index');

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

Route::resource('superAdmin/categories', 'CategoriesController', ['names'=>[
'index'=>'categories.index',
'create'=>'categories.create',
'store'=>'categories.store',
'edit'=>'categories.edit',
]]);


Route::resource('superAdmin/subCategory', 'superAdmin\subCatController', ['names'=>[
'index'=>'subCategory.index',
'create'=>'subCategory.create',
'store'=>'subCategory.store',
'edit'=>'subCategory.edit',
]]);

Route::resource('user/info', 'User\InfoController', ['names'=>[
'update'=>'userInfo.update',
]]);



Route::group(['middleware' => 'web'], function() {
	Route::get('user/post/getSubCat/{id}', 'User\AdController@getSubCat');
	Route::resource('user/post', 'User\AdController', ['names'=>[
		'index'=>'user.post.index',
		'create'=>'user.post.create',
		'store'=>'user.post.store',
		'edit'=>'user.post.edit',
		'show'=>'user.post.show'
	]]);
});


Auth::routes();

Route::get('/home', 'HomeController@index');
