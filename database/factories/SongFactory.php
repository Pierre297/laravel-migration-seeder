<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {

    return [
        'title' => $faker->name(),
        'release' => $faker->dateTime(),
        'duration' => $faker->numberBetween(30, 600),
        'features' => $faker->name(),
        'license' => $faker->text(100),
        'lyrics' => $faker->text(100),
        'genre' => $faker->word(),
    ];
});
