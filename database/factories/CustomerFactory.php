<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Customer::class, function (Faker $faker) {
    return [
        'FirstName' => $faker->firstName ,
        'LastName' => $faker->lastName ,
        'Name' => $faker->name,
        'salesRepEmployeeNum' => $faker->randomNumber(4),
        'Phone' => $faker->phoneNumber,
        'Address1' => $faker->address,
        'Address2' => $faker->secondaryAddress,
        'City' => $faker->city,
        'State' => $faker->state,
        'Country' => $faker->country,
        'PostalCode' => $faker->randomNumber(4),
        'CreditLimit' => $faker->randomNumber(4)
    ];
});
