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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::resource('admin/users', 'AdminUsersController');

Route::get('/admin/users', 'AdminUsersController@index')->name('adminhome');

//Route::get('/admin/users/edit', 'AdminUsersController@edit')->name('adminedit');



//Route::get('/admin/users/create', 'AdminUsersController@create')->name('admincreate');


Route::POST('/admin/users/store', 'AdminUsersController@store');