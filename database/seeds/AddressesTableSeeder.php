<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('addresses')->delete();
        
        \DB::table('addresses')->insert(array (
            0 => 
            array (
                 'area' => '131, Dhanmondi',
                'city' => 'Dhaka',
                'zip' => 1229,
            ),
            1 => 
            array (
                'area' => 'Mirpur 10',
                'city' => 'Dhaka',
                'zip' => 1772,
            ),
            2 => 
            array (
                'area' => 'Mirpur 2',
                'city' => 'Dhaka',
                'zip' => 1223,
            ),
            3 => 
            array (
                'area' => 'Uttora',
                'city' => 'Dhaka',
                'zip' => 1233,
            ),
        ));
        
        
    }
}