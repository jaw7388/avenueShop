<?php

use Illuminate\Database\Seeder;

use App\Products_state;
class Products_statesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
				'state' => 'Active'
            ],
            [
                'state' => 'Inactive'
            ]
            );
        Products_state::insert($data);
    }
}


