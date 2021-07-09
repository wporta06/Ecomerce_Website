<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

// just to generate fake info to test, with help of seeds
$factory->define(Category::class, function (Faker $faker) {

    $title=$faker->sentence();  //get title using fake info
    return [
        "title" => $title,          //put it in title 
        "slug" => Str::slug($title) //put it in slug too
    ];
});
