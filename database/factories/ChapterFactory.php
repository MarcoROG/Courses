<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Chapter::class, function (Faker $faker) {
    
    return [
        'name' => $faker->word,
        'course_id' => function () {
            return factory(\App\Course::class)->create()->id;
        },
    ];
});
