<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Result::class, function (Faker $faker) {
    
    return [
        'name' => $faker->word,
        'hypothesis' => $faker->paragraph,
        'thesis' => $faker->paragraph,
        'outline' => $faker->paragraph,
        'proof' => $faker->paragraph,
        'type' => $faker->randomDigitNotNull,
    ];
});
