<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
// use App\Admin;

use App\Admin;
use App\Model;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        
        'name' => "walid",
        'email' => "admin@gmail.com",
        'email_verified_at' => now(),
        'password' => Hash::make("admin"), // password with hashing (import HASH)
        'remember_token' => Str::random(10),
   
    ];
});
