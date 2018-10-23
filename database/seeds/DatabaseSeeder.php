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
        
        $this->call(UsersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        
    }
}
