<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountriesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(User_rolesTableSeeder::class);
        $this->call(SizesTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(Products_statesSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(Products_sizesSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(StocksTableSeeder::class);
        
        $this->call(Products_reviewsTableSeeder::class);

    }
}
