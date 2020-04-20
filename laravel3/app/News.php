<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  public $timestamps = false;
  protected $primaryKey = 'news_id';
  protected $headline = 'headline';
  protected $text = 'text';
  protected $category = 'category';

  public static function rules() {
    return [
      'headline' => 'required|max:255',
      'text' => 'required'
    ];
  }

  public static function attributeNews() {
    return [
      'headline' => 'Название новости',
      'text' => 'Текст'
    ];
  }
}
