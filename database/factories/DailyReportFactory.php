<?php

use Faker\Generator as Faker;

$factory->define(App\Models\DailyReport::class, function (Faker $faker) {
    return [
        'user_id'           => $faker->numberBetween($min = 1, $max = 2),
        'title'             => $faker->word,
        'content'           => $faker->paragraph,
        'reporting_time'    => $faker->date($format = 'Y-m-d').' '.$faker->time($format = 'H:i:s'),
        'created_at'        => $faker->date($format = 'Y-m-d').' '.$faker->time($format = 'H:i:s'),
        'updated_at'        => $faker->date($format = 'Y-m-d').' '.$faker->time($format = 'H:i:s'),
        'deleted_at'        => null,
    ];
});