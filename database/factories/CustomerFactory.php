<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'lname' => $faker->lastName,
        'fname' => $faker->firstName,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,

    ];
});
