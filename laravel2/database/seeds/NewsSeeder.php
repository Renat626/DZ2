<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('news')->insert($this->getData());
    }

    private function getData() {
      $faker = Faker\Factory::create('ru_RU');

      $data = [];
      for($i = 0; $i < 10; $i++) {
        $data[] = [
          'headline' => $faker->sentence(rand(3, 10)),
          'text' => $faker->realText(rand(100, 200)),
          'category' => rand(1, 2)
        ];
      }
      return $data;
    }
}
