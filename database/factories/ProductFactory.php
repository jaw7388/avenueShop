<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'product_name' => $faker->word , 
        'product_description' => $faker-> text($maxNbChars = 200), 
        'product_little_description' =>$faker->sentence($nbWords = 6, $variableNbWords = true) , 
        'product_video' =>$faker->url, 
        'product_price' =>$faker->randomFloat(2, 0, 1000), 
        'product_specs' =>$faker-> text($maxNbChars = 200)
    ];
});
