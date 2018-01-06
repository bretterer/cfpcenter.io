<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Submission::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'conference_id' => $faker->randomDigitNotNull,
        'talk_title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'talk_length' => 30,
        'talk_level' => 'beginner',
        'joindin_link' => 'https://joind.in/talks/' . $faker->randomDigitNotNull,
        'labels' => 'APIs'
    ];
});
