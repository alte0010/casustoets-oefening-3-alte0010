<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->name(1),
        'Country' => $faker->country,
        'founded_at' => $faker->dateTime,
        'history' => '<p>'.implode('</p><p>', $faker->paragraphs(5)).'</p>',
    ];
});
