<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
  private $news = [
    1 => [
      'id' => 1,
      'headline' => 'Короновирус',
      'text' => 'В субботу оперштаб сообщил, что подтверждены еще 228 случаев заражения коронавирусом. Всего заразившихся 1264 человека, выздоровели 49, умерли четверо.',
      'category' => 1
    ],

    2 => [
      'id' => 2,
      'headline' => 'Курс доллара',
      'text' => 'Курс доллара в пятницу вырос на 1,39 руб. - до 78,86 руб.',
      'category' => 2
    ]
  ];

  private $categories = [
    1 => [
      'category_id' => 1,
      'category' => 'diseases'
    ],

    2 => [
      'category_id' => 2,
      'category' => 'economy'
    ]
  ];

  public function showNews() {
    return view('/news', ['news' => $this->news,]);
  }

  public function showNewById($id) {
    return view('/newOne', ['news' => $this->news, 'id' => $id]);
  }

  public function showCategories() {
    return view('/categories', ['categories' => $this->categories]);
  }

  public function showNewByCategory($category_id) {
    return view('/categoryOne', ['categories' => $this->categories, 'news' => $this->news, 'category_id' => $category_id]);
  }

  public function addNew(Request $req) {
    if (empty($this->news)) {
      $array = [1 => [
        'id' => $key,
        'headline' => $req->input('headline'),
        'text' => $req->input('text'),
        'category' => intval($req->input('category'))
      ]];
    } else {
      $key = array_key_last($this->news)+1;
      $array = [
        'id' => $key,
        'headline' => $req->input('headline'),
        'text' => $req->input('text'),
        'category' => intval($req->input('category'))
      ];
    }

    array_push($this->news, $array);

    var_dump($this->news);
  }

}
