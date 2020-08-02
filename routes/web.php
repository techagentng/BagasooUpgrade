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

Route::get('/', 'PagesController@index');
// Route::get('/user/{id}', function ($id) {
//     //return view('welcome');
//     return 'The project name is'.$id;
// });
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/specialties', 'PagesController@specialties');
Route::get('/publications', 'PagesController@publications');
Route::get('/contact', 'PagesController@contact');
Route::resource('posts', 'PostsController');
