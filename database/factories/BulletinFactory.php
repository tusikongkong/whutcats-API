<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bulletin;
use Faker\Generator as Faker;

$factory->define(Bulletin::class, function (Faker $faker) {
    return [
        'text' => $faker->sentence(5,true),
        'color' => $faker->hexColor,
    ];
});
