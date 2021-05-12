<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

		\DB::table('products')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'name' => 'Parfum Unisex',
                'type' => 'Parfum Unisex',
				'image' => 'shop01.png',
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
        ));
        
        
    }
}