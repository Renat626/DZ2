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

Route::get('/', function () {
    return view('welcome2', [
      'data' => 'data',
      'news' => 'news'
    ]);
});

Route::get('/data', function () {
    return view('data', [
      'welcome' => '/',
      'news' => 'news'
    ]);
});

Route::get('/news', function () {
    return view('news', [
      'welcome' => '/',
      'data' => 'data'
    ]);
});
