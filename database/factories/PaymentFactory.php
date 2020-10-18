<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Payment::class, function (Faker $faker) {
    return [
        'CheckNum' => $faker->bankAccountNumber,
        'PaymentDate' => $faker->dateTime,
        'Amount' => $faker->randomNumber(2)
    ];
});
