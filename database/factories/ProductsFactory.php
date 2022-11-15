<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    return [
    
        'name' => fake()->name(),
        'price' => rand(0,1000),
        'qte' => rand(0,1000),

    ];
});
