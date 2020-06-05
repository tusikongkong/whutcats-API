<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->randomElement(['阿巴','阿巴阿巴','阿巴阿巴阿巴']),
        'content' => $faker->paragraph(4,true),
    ];
});
