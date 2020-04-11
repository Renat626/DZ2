<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use DB;

class NewsController extends Controller
{
  public function showNews() {
    $news = DB::select('SELECT news_id, headline, text FROM news');
    return view('/news.news', ['news' => $news]);
  }

  public function showNewById($id) {
    $new = DB::select("SELECT headline, text FROM news WHERE news_id = :id", ['id' => $id]);
    return view('/news.newOne', ['new' => $new[0]]);
  }

  public function showCategories() {
    $categories = DB::select('SELECT id, category FROM categories');
    return view('/categories.categories', ['categories' => $categories]);
  }

  public function showNewByCategory($category_id) {
    $categories = DB::select('SELECT id, category FROM categories');
    $news = DB::select('SELECT news_id, headline, text, category FROM news');
    return view('/categories.categoryOne', ['categories' => $categories[0], 'news' => $news, 'category_id' => $category_id]);
  }

  public function locationAddNew() {
    $categories = DB::select('SELECT id, category FROM categories');
    return view('/news.addNew', ['categories' => $categories]);
  }

  public function addNew(Request $req) {
    $news = DB::insert('INSERT INTO news (headline, text, category) VALUES (:headline, :text, :category)',
    ['headline' => $req->input('headline'),
     'text' => $req->input('text'),
     'category' => intval($req->input('category'))
    ]);

    return view('welcome');
  }
}
