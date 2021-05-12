<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'txtProductName' => 'ADILAH PARFUM INSPIRED BY BACCARAT',
                'image_name' => '1.jpg',
				'txtProductCode' => 'P0001',
                'description' => '<p>Harga parfum brand dunia original itu 1 juta &ndash; 2 Juta bahkan Lebih. Meskipun harganya mahal, tetap saja laku keras, karena memang terbukti kualitas dan ketahanan wanginya yang mantap membuat konsumen merasa puas. Tak heran jika parfum brand dunia dari eropa ini sangat legendaris dan tersebar ke seluruh dunia. SOLUSI HEMAT! Tampil Masculine dengan WANGI PARFUM KELAS DUNIA tanpa perlu mengeluarkan budget JUTAAN RUPIAH ADILAH PARFUM&nbsp;hadir sebagai parfum yang menghasilkan parfum berkualitas setara dengan brand parfum terbaik dunia. Terinspirasi dari parfum terbaik dunia lainnya, kami tergerak melakukan riset yang mendalam terkait aroma, efek dan karakter pengguna. Adilah Parfum di buat dengan menggunakan konsentrat impor asli eropa dan alkohol khusus parfum. Paduan ini menghasilkan aroma yang natural,tahan lama dan sangat menyerupai parfum originalnya.. BACCARAT ROUGE 540 EAU DE PARFUM UNISEX : Paduan amberwood, kayu, bunga, dan rempahnya sangat unik dan mewah. Lain dari yg lain. Sedang hits di kalangan artis &amp; sosialita. Cocok utk harian, kuliah, ngantor, ngedate, dan acara formal 😍 Parfum yang kami jual memiliki aroma mirip dengan parfum originalnya. Untuk ketahanan parfum bisa tahan 6 - 8 jam bisa lebih tergantung aktifitas kita di lapangan atau di ruangan ac. Parfum tidak panas dikulit dan tidak membekas di baju karna campuran parfum kita menggunakan alkohol khusus untuk parfum dan aman buat di bawa sholat. NOTE : JANGAN KARENA SELISIH HARGA.. ANDA MEMILIH PRODUK YANG SALAH.. Kami mempunyai berbagai macam aroma parfum. ---------------------------------------------------------------------------------- UNTUK NAMA DAN AROMA PARFUM YANG LAINNYA .. SILAHKAN KONFIRMASI NAMA DAN AROMA PARFUM MELALUI CHAT SHOOPE ---------------------------------------------------------------------------------- Untuk pengiriman kita setiap hari... Barang yang pecah dalam pengiriman diluar tanggung jawab kami, karna pakingan kami selalu menggunakan buble warp. Untuk pengiriman diluar pulau jawa kita menggunakan jasa pengiriman J&amp;T untuk menghindari barang tidak lolos di bandara. Terimakasih telah berkunjung ditoko kami dan selamat berbelanja 😊🙏🙏🙏</p>',
                'decPrice' => 100000,
				'intQty' => 30,
                'discount' => 78500,
                'tag' => 'New',
                'category_id' => 1,
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            )
        ));
        
        
    }
}