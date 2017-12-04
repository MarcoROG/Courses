<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Definition::class, function (Faker $faker) {
    
    return [
        'name' => $faker->word,
        'content' => $faker->paragraph,
    ];
});
