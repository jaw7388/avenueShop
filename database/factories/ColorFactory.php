<?php

use Faker\Generator as Faker;

$factory->define(App\Color::class, function (Faker $faker) {
    return [
        'color_name' => $faker->colorName,
        'code' => $faker->hexcolor
    ];
});
