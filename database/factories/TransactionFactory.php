<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Transaction;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {
    return [
        'customer_id' => rand(1, 20),
        'mod_id' => rand(1, 20),
        'quantity' => rand(1,20),
        'amount' => $faker->numberBetween($min = 1500, $max = 6000)

    ];
});
