<?php

use Illuminate\Database\Seeder;

class Products_colorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 50; $i++) {
            DB::table('products_colors')->insert([
                'product_id'=> App\Product::all()->random()->id, 
                'color_id'=> App\Color::all()->random()->id
           ]);
        }
    }
}
