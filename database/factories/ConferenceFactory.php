<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Conference::class, function (Faker $faker) {

    $coc = $faker->boolean(50);

    return [
        'name' => $faker->word . ' PHP Conference',
        'conf_date' => $faker->date(),
        'cfp_date' => $faker->date(),
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'country' => $faker->country,
        'coc' => $coc,
        'coc_link' => $coc === 0 ? false : $faker->url,
        'website' => $faker->url,
        'about' => $faker->text,
        'image_link' => $faker->url
    ];
});
