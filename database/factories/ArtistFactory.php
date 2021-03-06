<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {

    return [
        'name' => $faker->name(),
        'description' => $faker->text(100),
        'tour_dates' => $faker->dateTime(),
        'merch' => $faker->text(100),
    ];
});
