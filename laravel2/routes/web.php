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

Route::get('/', [
  'uses' => 'WelcomeController@welcome'
]);

Route::get('/news', [
  'uses' => 'NewsController@showNews'
]);

Route::get('/news/{id}', [
  'uses' => 'NewsController@showNewById'
]);

Route::get('/categories', [
  'uses' => 'NewsController@showCategories'
]);

Route::get('/categories/{category}', [
  'uses' => 'NewsController@showNewByCategory'
]);
