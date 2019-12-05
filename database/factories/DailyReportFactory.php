<?php

use Faker\Generator as Faker;
use App\Models\DailyReport as Report;

$factory->define(Report::class, function (Faker $faker) {
    return [
        'user_id'           => $faker->numberBetween(1, 4),
        'title'             => $faker->word,
        'content'           => $faker->paragraph,
        'reporting_time'    => $faker->dateTimeBetween('-2 years'),
    ];
});