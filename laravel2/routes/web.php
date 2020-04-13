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

Route::get('/categories/{category_id}', [
  'uses' => 'NewsController@showNewByCategory'
]);


Route::get('/add', [
  'uses' => 'NewsController@locationAddNew'
]);

Route::post('/add', [
  'uses' => 'NewsController@addNew'
])->name('add');

Route::get('/update', [
  'uses' => 'NewsController@locationUpdateNew'
]);

Route::post('/update', [
  'uses' => 'NewsController@updateNew'
])->name('update');

Route::get('/delete', [
  'uses' => 'NewsController@locationDeleteNew'
]);

Route::post('/delete', [
  'uses' => 'NewsController@deleteNew'
])->name('delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
