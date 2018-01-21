<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->text(50),
        'description' => $faker->text(120),
        'price' => $faker->numberBetween(1, 25)
    ];
});
