# Teknologi yang dipakai :

Saya menggunakan php laravel, PHP, MySQL, XAMPP, Composer

# Instalasi dan menjalankan aplikasi di lokal :
1. Gunakan command prompt dan arahkan ke folder root. Lalu ketik :</br>
   $ composer install</br>
   Note : Jika command ini tidak berhasil, install composer terlebih dahulu</br>
2. Ganti nama file .env.example ke .env di folder root.</br>
   Open the file .env and adjust DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD to your MYSQL setting.</br>
3. Gunakan command prompt dan arahkan ke folder root. Lalu ketik :</br>
   $ php artisan key:generate</br>
   $ php artisan optimize</br>
   $ php artisan migrate</br>
   $ php artisan db:seed</br>
4. Buka folder di browser. Example : </br>
   Jika folder bernama kalbetest maka buka localhost/kalbetest