<?php

use Faker\Generator as Faker;

$factory->define(App\Stock::class, function (Faker $faker) {
        return [
            'product_size_id' => App\Products_size::all()->random()->id, 
            'product_color_id' => App\Products_color::all()->random()->id,
            'stock' => $faker->numberBetween($min = 1, $max = 20), 
            'product_id' => App\Product::all()->random()->id,
        ];
});
