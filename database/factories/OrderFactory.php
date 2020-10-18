<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Order::class, function (Faker $faker) {
    return [
        'OrderDate' => $faker->dateTime,
        'RequiredDate' => $faker->dateTime,
        'ShippedDate' => $faker->dateTime,
        'Status' => $faker->numberBetween(0,1),
        'Comments' => $faker->text(100)
    ];
});
