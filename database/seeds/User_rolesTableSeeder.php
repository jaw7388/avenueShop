<?php

use Illuminate\Database\Seeder;
use App\User_role;

class User_rolesTableSeeder extends Seeder
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
                'id' => '1',
				'role' => 'Administrator'
            ],
            [
                'id' => '2',
				'role' => 'User'
            ]
            );
        User_role::insert($data);

        

    }
}
