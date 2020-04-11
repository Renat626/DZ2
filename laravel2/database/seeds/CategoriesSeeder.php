<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert($this->getData());
    }

    private function getData() {
      $faker = Faker\Factory::create('ru_RU');

      $data = [];
      for($i = 0; $i < 2; $i++) {
        $data[] = [
          'id' => rand(1, 2),
          'category' => $faker->sentence(1)
        ];
      }
      return $data;
    }
}
