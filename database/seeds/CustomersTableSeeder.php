<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 => 
            array (
                'txtCustomerName' => 'John Doe',
                'email' => 'john@examle.com',
                'password' => '12345',
                'prev_password' => NULL,
                'txtCustomerAddress' => "Jakarta Kota",
				'bitGender' => "Laki Laki",
				'dtmBirthDate' => '1980-02-09',
                'Inserted' => '2019-02-09',
                'updated_at' => '2019-02-09',
            )
        ));       
    }
}