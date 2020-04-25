<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;
use App\News;

class ParserController extends Controller
{
    public function index() {
      $xml = XmlParser::load('https://www.cbr-xml-daily.ru/daily_utf8.xml');

      $data = $xml->parse([
        'news' => [
          'uses' => 'Valute[Name,Value]'
        ]
      ]);

      foreach ($data['news'] as $key => $value) {
        $new = new News;
        if (!News::query()->where(['headline' => $value['Name']])->first() &&
            !News::query()->where(['text' => $value['Value']])->first()) {
              $new->headline = $value['Name'];
              $new->text = $value['Value'];
              $new->category_id = '1';
              $new->save();
        }
      }

      $xml = XmlParser::load('https://news.yandex.ru/army.rss');

      $data = $xml->parse([
        'news' => [
          'uses' => 'channel.item[title,description]'
        ]
      ]);

      foreach ($data['news'] as $key => $value) {
        $new = new News;
        if (!News::query()->where(['headline' => $value['title']])->first() &&
            !News::query()->where(['text' => $value['description']])->first()) {
              $new->headline = $value['title'];
              $new->text = quotemeta($value['description']);
              $new->category_id = '2';
              $new->save();
        }
      }

      return view('admin.admin');
    }
}
