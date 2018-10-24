<?php

use Illuminate\Database\Seeder;


class Products_reviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(App\Products_review::class, 20)->create();
    }
}
