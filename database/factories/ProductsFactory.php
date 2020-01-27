<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$menu=/Menu::all();

$factory->define(Product::class, function (Faker $faker) {
    return [
      "name"=>$faker->word(),
      "price"=>$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
      "image"=>$faker->imageUrl($width = 640, $height = 480),
      
    ];
});
