<?php

use Illuminate\Database\Seeder;

class OngkirTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \DB::table('ongkirs')->delete();
        
        \DB::table('ongkirs')->insert(array (
            0 => 
            array (
				'nm_prov' => 'Aceh',
                'ongkir' => 45000
            ),
			1 => 
            array (
				'nm_prov' => 'Sumatera Utara',
                'ongkir' => 37000
            ),
			2 => 
            array (
				'nm_prov' => 'Sumatera Barat',
                'ongkir' => 35000
            ),
			3 => 
            array (
         		'nm_prov' => 'Riau',
                'ongkir' => 35000
            ),
			4 => 
            array (
         		'nm_prov' => 'Jambi',
                'ongkir' => 28000
            ),
			5 => 
            array (
         		'nm_prov' => 'Sumatera Selatan',
                'ongkir' => 22000
            ),
			6 => 
            array (
         		'nm_prov' => 'Bengkulu',
                'ongkir' => 38000
            ),
			7 => 
            array (
        		'nm_prov' => 'Lampung',
                'ongkir' => 38000
            ),
			8 => 
            array (
        		'nm_prov' => 'Kepulauan Bangka Belitung',
                'ongkir' => 39000
            ),
			9 => 
            array (
        		'nm_prov' => 'Kepulauan Riau',
                'ongkir' => 44000
            ),
			10 => 
            array (
        		'nm_prov' => 'DKI Jakarta',
                'ongkir' => 10000
            ),
			11 => 
            array (
        		'nm_prov' => 'Jawa Barat',
                'ongkir' => 11000
            ),
			12 => 
            array (
        		'nm_prov' => 'Jawa Tengah',
                'ongkir' => 18000
            ),
			13 => 
            array (
        		'nm_prov' => 'D.I Yogya',
                'ongkir' => 18000
            ),
			14 => 
            array (
        		'nm_prov' => 'Jawa Timur',
                'ongkir' => 19000
            ),
			15 => 
            array (
        		'nm_prov' => 'Banten',
                'ongkir' => 9000
            ),
			16 => 
            array (
        		'nm_prov' => 'Bali',
                'ongkir' => 28000
            ),
			17 => 
            array (
        		'nm_prov' => 'Nusa Tenggara Barat',
                'ongkir' => 35000
            ),
			18 => 
            array (
        		'nm_prov' => 'Nusa Tenggara Timur',
                'ongkir' => 66000
            ),
			19 => 
            array (
        		'nm_prov' => 'Kalimantan Barat',
                'ongkir' => 37000
            ),
			20 => 
            array (
        		'nm_prov' => 'Kalimantan Tengah',
                'ongkir' => 33000
            ),
			21 => 
            array (
        		'nm_prov' => 'Kalimantan Selatan',
                'ongkir' => 41000
            ),
			22 => 
            array (
        		'nm_prov' => 'Kalimantan Timur',
                'ongkir' => 37000
            ),
			23 => 
            array (
        		'nm_prov' => 'Kalimantan Utara',
                'ongkir' => 65000
            ),
			24 => 
            array (
        		'nm_prov' => 'Sulawesi Utara',
                'ongkir' => 60000
            ),
			25 => 
            array (
        		'nm_prov' => 'Sulawesi Tengah',
                'ongkir' => 44000
            ),
			26 => 
            array (
        		'nm_prov' => 'Sulawesi Selatan',
                'ongkir' => 43000
            ),
			27 => 
            array (
        		'nm_prov' => 'Sulawesi Tenggara',
                'ongkir' => 65000
            ),
			28 => 
            array (
        		'nm_prov' => 'Gorontalo',
                'ongkir' => 65000
            ),
			29 => 
            array (
        		'nm_prov' => 'Sulawesi Barat',
                'ongkir' => 57000
            ),
			30 => 
            array (
        		'nm_prov' => 'Maluku',
                'ongkir' => 105000
            ),
			31 => 
            array (
        		'nm_prov' => 'Maluku Utara',
                'ongkir' => 105000
            ),
			32 => 
            array (
        		'nm_prov' => 'Papua',
                'ongkir' => 105000
            ),
			32 => 
            array (
        		'nm_prov' => 'Papua Barat',
                'ongkir' => 105000
            ),
			
        ));
    }
}
