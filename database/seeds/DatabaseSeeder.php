<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table("products")->insert([
        "name"=>$faker->word(),
        "price"=>$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        "image"=>$faker->imageUrl($width = 640, $height = 480),
      ]);
    // $this->call(SeederPrueba::class);

   }
}
