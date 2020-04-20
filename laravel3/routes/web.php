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

Route::group([
    'prefix' => 'admin',
], function () {
  Route::get('/', [
    'uses' => 'NewsController@admin'
  ]);

  Route::get('/addLocation', [
    'uses' => 'NewsController@locationAddNew'
  ]);

  Route::post('/add', [
    'uses' => 'NewsController@addNew'
  ])->name('add');

  Route::get('/updateLocation', [
    'uses' => 'NewsController@locationUpdateNew'
  ]);

  Route::post('/update', [
    'uses' => 'NewsController@updateNew'
  ])->name('update');

  Route::get('/newsAdmin', [
    'uses' => 'NewsController@showNewsAdmin'
  ]);

  Route::get('/newsAdmin/{id}', [
    'uses' => 'NewsController@showNewAdminById'
  ]);

  Route::get('newsAdmin/delete/{news}', [
    'uses' => 'NewsController@deleteNew'
  ]);

  Route::get('/updateUserLocation', [
    'uses' => 'ProfileController@locationUpdateUser'
  ]);

  Route::post('/updateUser', [
    'uses' => 'ProfileController@updateUser'
  ])->name('updateUser');
});

Route::group([
    'prefix' => 'news'
], function () {
  Route::get('/', [
    'uses' => 'NewsController@showNews'
  ]);

  Route::get('/{id}', [
    'uses' => 'NewsController@showNewById'
  ]);
});

Route::group([
    'prefix' => 'categories'
], function () {
  Route::get('/', [
    'uses' => 'NewsController@showCategories'
  ]);

  Route::get('/{category_id}', [
    'uses' => 'NewsController@showNewByCategory'
  ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
