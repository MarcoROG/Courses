<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Observation::class, function (Faker $faker) {
    
    return [
        'title' => $faker->word,
        'content' => $faker->paragraph,
        'result_id' => function () {
            return factory(\App\Result::class)->create()->id;
        },
    ];
});
