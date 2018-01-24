<?php

use Faker\Generator as Faker;

$factory->define(App\ProductInventory::class, function (Faker $faker) {
    return [
        'product_id' => factory(App\Product::class, 'simpleProduct')->create()->id,
        'quantity' => $faker->numberBetween(1,1000)
    ];
});
