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

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/testhome', 'HomeController@testhome')->name('testhome');


// ## Change ## use Route::resource instead because it's more simple
// Route::get('/admin/categories', 'CategoriesController@index')->name('list_category');
// Route::get('admin/categories/detail/{$id}', 'CategoriesController@detail')->name('detail_category');
Route::resource('/admin/categories', 'Admin\CategoriesController', ['as'=> 'admin']);
