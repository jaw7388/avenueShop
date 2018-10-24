<?php

use Illuminate\Database\Seeder;
use App\Size;

class SizesTableSeeder extends Seeder
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
				'size_name' => 'l'
            ],
            [
                'size_name' => 'xl'
            ],
            [
				'size_name' => 'XXL'
            ],
            );
        Size::insert($data);
    }
}
