<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $p=rand(7,35)*1000;
    return [
        'name' => $faker->name(),
        'pic' => rtrim($faker->sentence(rand(3,6)),'.'),
        'included' => rtrim($faker->sentence(rand(1,5)),'.'),
        'price' => $p,
        'category_id'=>null
    ];
});
