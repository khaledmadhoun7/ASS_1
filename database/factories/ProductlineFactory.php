<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Productline::class, function (Faker $faker) {
    return [
        'DescInText' => $faker->text,
        'DescInHTML' => $faker->text,
        'Image' => $faker->image(null,640,480,null,false,false,'here picture')
    ];
});
