# Used technology :

I am using php laravel, PHP, MySQL, XAMPP, Composer

# Instalation and running server locally :
1. Use command prompt and direct to root folder and type :</br>
   $ composer install</br>
   Note : install composer first if this command not working</br>
2. Rename file .env.example to .env in root folder.</br>
   Open the file .env and adjust DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD to your MYSQL setting.</br>
3. Use command prompt and direct to root folder and type :  
   $ php artisan key:generate</br>
   $ php artisan optimize</br>
   $ php artisan migrate</br>
   $ php artisan db:seed</br>
4. Open folder on browser. Example : </br>
   If folder name kalbetest then open localhost/kalbetest