<?php

use Faker\Generator as Faker;

$factory->define(App\Products_review::class, function (Faker $faker) {
    return [
        'product_id' => App\Product ::all()->random()->id, 
        'product_rate' => $faker->numberBetween($min = 1, $max = 5),
        'product_review' => $faker-> text($maxNbChars = 191), 
        'user_id' => App\User ::all()->random()->id, 
    ];
});
