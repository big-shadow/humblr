<?php

use Faker\Generator as Faker;

$factory->define(App\ProductCostAudit::class, function (Faker $faker) {
    return [
        'product_id' => factory(App\Product::class, 'simpleProduct')->create()->id,
        'units_purchased' => $faker->numberBetween(1,100),
        'cost_per_unit' => $faker->randomFloat(2,1,10),
        'total_cost' => $faker->randomFloat(2,10,100),
        'supplier_note' => $faker->text(120),
    ];
});
