<?php

use Faker\Generator as Faker;

$factory->defineAs(App\DistributionCenter::class, 'SimpleDistCenter', function (Faker $faker) {
    return [
        'name' => $faker->text(50),
        'address' => $faker->text(120)
    ];
});
