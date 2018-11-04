<?php

use Faker\Generator as Faker;

$factory->define(App\Image::class, function (Faker $faker) {
    return [
        'name' => $faker->imageUrl($width = 640, $height = 480, 'cats')
    ];
});
