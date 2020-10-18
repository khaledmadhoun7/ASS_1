<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\OrderProduct::class, function (Faker $faker) {
    return [
        'Qty' => $faker->randomNumber(2),
        'PriceEach' => $faker->randomNumber(2)
    ];
});
