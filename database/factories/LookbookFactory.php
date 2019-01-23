<?php

use Faker\Generator as Faker;

$factory->define(App\Lookbook::class, function (Faker $faker) {
    return [
        'product_id' => App\Product::all()->random()->id,
        'user_id' => App\User::all()->random()->id
    ];
});
