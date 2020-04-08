<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
  public function showNews() {
    $news = json_decode(File::get(storage_path() . '/news.json'), true);
    return view('/news.news', ['news' => $news]);
  }

  public function showNewById($id) {
    $new = json_decode(File::get(storage_path() . '/news.json'), true);
    return view('/news.newOne', ['headline' => $new[$id]['headline'], 'text' => $new[$id]['text']]);
  }

  public function showCategories() {
    $categories = json_decode(File::get(storage_path() . '/categories.json'), true);
    return view('/categories.categories', ['categories' => $categories]);
  }

  public function showNewByCategory($category_id) {
    $categories = json_decode(File::get(storage_path() . '/categories.json'), true);
    $news = json_decode(File::get(storage_path() . '/news.json'), true);
    return view('/categories.categoryOne', ['categories' => $categories, 'news' => $news, 'category_id' => $category_id]);
  }

  public function locationAddNew() {
    $categories = json_decode(File::get(storage_path() . '/categories.json'), true);
    return view('/news.addNew', ['categories' => $categories]);
  }

  public function addNew(Request $req) {
    $news = json_decode(File::get(storage_path() . '/news.json'), true);
    if (empty($news)) {
      $array = [1 => [
        'id' => 1,
        'headline' => $req->input('headline'),
        'text' => $req->input('text'),
        'category' => $req->input('category')
      ]];

      File::put(storage_path() . '/news.json', json_encode($array, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    } else {
      $id = array_key_last($news)+1;
      $news[] = [
        'id' => $id,
        'headline' => $req->input('headline'),
        'text' => $req->input('text'),
        'category' => intval($req->input('category'))
      ];

      $content = json_encode($news, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

      File::put(storage_path() . '/news.json', $content);
    }

    return view('welcome');
  }
}
