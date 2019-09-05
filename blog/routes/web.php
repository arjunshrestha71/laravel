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

Route::get('/details/{id}', 'FrontController@details')->name('full.details');
Route::get('/cats/{id}', 'FrontController@catlist');
Route::get('/', 'FrontController@index');
Route::get('/contact', 'homeController@contact');
Route::resource('/category', 'CategoryController');
Route::resource('/post', 'PostController');

Route::get('/hello', function ()
{
  return " Hi";
});

Route::get('/about', function()
{
   return view('about');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
