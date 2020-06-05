<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cat;
use Faker\Generator as Faker;

$factory->define(Cat::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'sex' => $faker->randomElement(['男', '女', '未知']),
        'sterilization' => $faker->randomElement(['未绝育', '已绝育']),
        'deworming' => $faker->randomElement(['未驱虫','已驱虫']),
        'vaccine' => $faker->randomElement(['猫三联','狂犬病疫苗','未接种','猫三联、狂犬病疫苗']),
        'introduction' => $faker->text(50),
        'shortintro' => $faker->text(25),
        'charactor' => $faker->randomElement(['怂','胆大','粘人']),
        'show' => $faker->randomElement(['大橘为重','狸花','奶牛','纯白']),
        'campus' => $faker->randomElement(['东院','西院','南湖','鉴湖','余区'])
    ];
});
