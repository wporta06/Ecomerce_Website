<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    
    $title = $faker->sentence();  //get title using fake info
    return [
        "title" => $faker->sentence(),          //put it in title  or $faker->sentence();
        "slug" => Str::slug($title), //put it in slug too
        "description" => $faker->paragraph, 
        "price" => $faker->numberBetween($min= 200,$max= 500), 
        "inStock" => $faker->numberBetween($min= 1,$max= 300), 
        "old_price" => $faker->numberBetween($min= 200,$max= 500), 
        "category_id" => $faker->numberBetween($min= 1,$max= 5),
        "image" => $faker->imageUrl($width= 600,$height= 400), 
    ];
});
