<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mod;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Mod::class, function (Faker $faker) {
    return [
        'make' => $faker->word,
        'brand' => $faker->word,
        'description' => $faker->text,
    ];
});
