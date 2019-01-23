<?php

use Faker\Generator as Faker;

$factory->define(App\City::class, function (Faker $faker) {
    return [
        'country_id' => App\Country::all()->random()->id,
        'city_name' => $faker->city
    ];
});
