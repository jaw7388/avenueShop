<?php

use Illuminate\Database\Seeder;

class Products_sizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++) { 
            DB::table('products_sizes')->insert([
                'product_id'=> App\Product::all()->random()->id, 
                'size_id'=> App\Size::all()->random()->id
           ]);
        }
    }
}


