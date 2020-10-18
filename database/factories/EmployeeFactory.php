<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(\App\Employee::class, function (Faker $faker) {
    return [
        'reportsTo' => $faker->randomDigit,
        'FirstName' => $faker->firstName,
        'LastName' => $faker->lastName,
        'Extension' => $faker->text,
        'Email' => $faker->unique()->safeEmail,
        'JobTitle' => $faker->jobTitle
    ];
});
