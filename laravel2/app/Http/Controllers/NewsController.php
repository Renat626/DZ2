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
      echo "<h1>News</h1>";

      foreach ($this->news as $key => $value) {
        echo <<<php
          <a href="news/{$value["id"]}">$value[headline]</a>
php;
      }

      echo '<br /> <a href="/">Main</a> ';
      echo '<a href="categories">Categories</a>';
    }

    function showNewById($id) {
      return <<<php
            <h1>{$this->news[$id]["headline"]}</h1>
            <p>{$this->news[$id]["text"]}</p>
            <a href="/">Main</a>
            <a href="/news">News</a>
            <a href="/categories">Categories</a>
php;
    }

    function showCategories() {
      foreach ($this->categories as $key => $value) {
        echo <<<php
              <a href="categories/{$value['category_id']}">$value[category]</a>
  php;
      }

      echo '<br /> <a href="/">Main</a> ';
      echo '<a href="news">News</a>';
    }

    function showNewByCategory($category_id) {
      foreach ($this->news as $key => $value) {
        if ($value['category'] == $category_id) {
          echo <<<php
              <h1>$value[headline]</h1>
              <p>$value[text]</p>
              <hr>
php;
        }
      }

      echo '<br /> <a href="/">Main</a>';
      echo ' <a href="/news">News</a>';
      echo ' <a href="/categories">Category</a>';
    }
}
