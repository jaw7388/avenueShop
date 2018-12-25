<?php

use Illuminate\Database\Seeder;

class LookbooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lookbook = factory(App\Lookbook::class, 50)->create();
    }
}
