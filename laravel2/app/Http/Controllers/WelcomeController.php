<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome() {
      return <<<php
          <h1>Hello everybody</h1>
          <a href="news">News</a>
          <a href="categories">Categories</a>
php;
    }
}
