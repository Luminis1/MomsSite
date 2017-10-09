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
//    return view('welcome');
//
//});

Route::get('/', 'Index\IndexController@index');
Route::resource('/', 'Index\IndexController');

Route::get('/about', 'About\AboutController@index');
Route::resource('/about', 'About\AboutController');

Route::get('/works', 'Works\WorksController@index');
Route::resource('/works', 'Works\WorksController');

Route::get('/services', 'Services\ServicesController@index');
Route::resource('/services', 'Services\ServicesController');

Route::get('/blog', 'Blog\BlogController@index');
Route::resource('/blog', 'Blog\BlogController');

Route::get('/contact', 'Contact\ContactController@index');
Route::resource('/contact', 'Contact\ContactController');

Route::get('/dashboard', 'Dashboard/DashboardController@index');
Route::resource('/dashboard', 'Dashboard\DashboardController');


Route::resource('/dashboard/create', 'Dashboard\DashCreate');


