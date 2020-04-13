<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Categories;

class NewsController extends Controller
{
  public function showNews() {
    return view('/news.news', ['news' => News::query()->paginate(3)]);
  }

  public function showNewById($id) {
    $new = News::query()->where('news_id', $id)->get();
    return view('/news.newOne', ['new' => $new]);
  }

  public function showCategories() {
    return view('/categories.categories', ['categories' => Categories::all()]);
  }

  public function showNewByCategory($category_id) {
    return view('/categories.categoryOne', ['categories' => Categories::all(), 'news' => News::all(), 'category_id' => $category_id]);
  }

  public function locationAddNew() {
    return view('/news.addNew', ['categories' => Categories::all()]);
  }

  public function addNew(Request $req) {
    $news = new News;
    $news->headline = $req->input('headline');
    $news->text = $req->input('text');
    $news->category = intval($req->input('category'));

    $news->save();

    return view('welcome');
  }

  public function locationUpdateNew() {
    return view('/news.updateNew', ['categories' => Categories::all(), 'news' => News::all()]);
  }

  public function updateNew(Request $req) {
    News::where('news_id', intval($req->input('news')))->update(['headline' => $req->input('headline'),
    'text' => $req->input('text'), 'category' => intval($req->input('category'))]);

    return view('welcome');
  }

  public function locationDeleteNew() {
    return view('/news.deleteNew', ['news' => News::all()]);
  }

  public function deleteNew(Request $req) {
    News::where('news_id', intval($req->input('news')))->delete();

    return view('welcome');
  }
}
