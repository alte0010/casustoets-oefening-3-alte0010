<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;


$factory->define(Movie::class, function (Faker $faker) {
    return [

        'title' => $faker->name(1),
        'year' => $faker->year,
        'excerpt' => $faker->slug,
        'last_watched_at' => $faker->dateTime,
        'times_watched' => $faker->randomDigit,
        'average_rating' => $faker->randomDigitNotNull,
        'company_id' => \App\Company::all()->random()->id
    ];
});

