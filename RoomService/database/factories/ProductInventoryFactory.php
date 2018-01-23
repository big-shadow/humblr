<?php

use Faker\Generator as Faker;

$factory->define(App\ProductInventory::class, function (Faker $faker) {
    return [
        'product_id' => factory(App\Product::class, 'simpleProduct')->create()->id,
        'cost_per_unit' => $faker->randomFloat(2,1,10),
        'quantity' => $faker->numberBetween(1,1000)
    ];
});
