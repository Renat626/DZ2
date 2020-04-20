<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Categories;
use Illuminate\Support\ViewErrorBag;

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
    return view('/categories.categoryOne', ['categories' => Categories::all(),
    'news' => News::all(),
    'category_id' => $category_id]);
  }

  public function admin() {
    return view('/admin.admin');
  }

  public function locationAddNew() {
    return view('/admin.addNew', ['categories' => Categories::all()]);
  }

  public function addNew(Request $req) {
    $news = new News;
    $this->validate($req, News::rules(), [], News::attributeNews());
    $news->headline = $req->input('headline');
    $news->text = $req->input('text');
    $news->category = intval($req->input('category'));
    $news->save();

    return view('/admin.addNew', ['categories' => Categories::all()]);
  }

  public function locationUpdateNew() {
    return view('/admin.updateNew', ['categories' => Categories::all(),
    'news' => News::all()]);
  }

  public function updateNew(Request $req) {
    $new = News::find(intval($req->input('news')));
    $this->validate($req, News::rules(), [], News::attributeNews());
    $new->headline = $req->input('headline');
    $new->text = $req->input('text');
    $new->category = intval($req->input('category'));
    $new->save();

    return view('/admin.updateNew', ['categories' => Categories::all(),
    'news' => News::all()]);
  }

  public function showNewsAdmin() {
    return view('/admin.newsAdmin', ['news' => News::query()->paginate(3)]);
  }

  public function showNewAdminById($id) {
    $new = News::query()->where('news_id', $id)->get();
    return view('/admin.newOneAdmin', ['new' => $new]);
  }

  public function deleteNew(News $news) {
    $news->delete();

    return view('welcome');
  }
}
