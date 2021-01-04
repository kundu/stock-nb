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


Route::get('/', 'HomeController@index')->middleware('auth');
Route::get('/login', 'LoginController@login')->name('login');
Route::get('/logout', 'LoginController@logout');
Route::post('/login-check', 'LoginController@loginCheck');


Route::get('/category/manage', 'CategoryController@index')->middleware('auth');
Route::post('/category/store', 'CategoryController@store')->middleware('auth');
Route::get('/category/ajax/sub-category/{id}', 'CategoryController@ajaxSubCategory')->middleware('auth');
Route::get('/category/sub-category/manage', 'CategoryController@manageSubCategory')->middleware('auth');
Route::post('/category/sub/store', 'CategoryController@storeSub')->middleware('auth');

Route::get('/master-data/region/manage', 'MasterDataController@region')->middleware('auth');
Route::post('/master-data/region/store', 'MasterDataController@createRegion')->middleware('auth');

Route::get('/employee/manage', 'EmployeeController@index')->middleware('auth');
Route::post('/employee/store', 'EmployeeController@store')->middleware('auth');

Route::get('/product/create', 'ProductController@create')->middleware('auth');
Route::post('/product/store', 'ProductController@store')->middleware('auth');
Route::get('/product/manage', 'ProductController@index')->middleware('auth');
Route::get('/product/edit/{id}', 'ProductController@edit')->middleware('auth');
Route::post('/product/update', 'ProductController@update')->middleware('auth');
Route::get('/product/ajax-form-field/{id}', 'ProductController@ajaxFormField')->middleware('auth');
