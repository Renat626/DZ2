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
        'category' => 'diseases'
      ],

      2 => [
        'id' => 2,
        'headline' => 'Курс доллара',
        'text' => 'Курс доллара в пятницу вырос на 1,39 руб. - до 78,86 руб.',
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

      echo '<br /> <a href="/">Назад</a>';
    }

    function showNewById($id) {
      return <<<php
            <h1>{$this->news[$id]["headline"]}</h1>
            <p>{$this->news[$id]["text"]}</p>
            <a href="/">Назад</a>
php;
    }

    function showCategories() {
      foreach ($this->news as $key => $value) {
        echo <<<php
              <a href="categories/{$value['category']}">$value[category]</a>
  php;
      }

      echo '<br /> <a href="/">Назад</a>';
    }

    function showNewByCategory($category) {
      foreach ($this->news as $key => $value) {
        if ($value['category'] == $category) {
          echo <<<php
              <h1>$value[headline]</h1>
              <p>$value[text]</p>
              <hr>
php;
        }
      }

      echo '<br /> <a href="/">Назад</a>'; 
    }
}
