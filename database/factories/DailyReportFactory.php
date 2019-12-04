<?php

use Faker\Generator as Faker;
use App\Models\DailyReport as Report;

$factory->define(Report::class, function (Faker $faker) {
    return [
        'user_id'           => $faker->numberBetween(1, 3),
        'title'             => $faker->word,
        'content'           => $faker->paragraph,
        'reporting_time'    => $faker->date('2019-m-d').' '.$faker->time('H:i:s'),
        'created_at'        => $faker->date('2019-m-d').' '.$faker->time('H:i:s'),
        'updated_at'        => $faker->date('2019-m-d').' '.$faker->time('H:i:s'),
    ];
});