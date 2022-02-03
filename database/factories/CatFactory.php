<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cat;
use Faker\Generator as Faker;

$factory->define(Cat::class, function (Faker $faker) {
    return [
        'name' => $faker -> name(),
        'race' => $faker -> words(1, true),
        'age'  => $faker -> numberBetween(1, 20),
    ];
});
