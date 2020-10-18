<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'Name' => $faker->name,
        'Scale' => $faker->randomNumber(2),
        'vendor' => $faker->company,
        'PdtDescription' => $faker->text(100),
        'QtyInStock' => $faker->randomNumber(2),
        'BuyPrice' => $faker->randomNumber(2),
        'MSRP' => $faker->companySuffix
    ];
});
