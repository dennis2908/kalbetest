<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('intCustomerID');
            $table->string('txtCustomerName');
            $table->text('email');
            $table->text('password');
            $table->text('txtCustomerAddress');
			$table->text('bitGender');
			$table->date('dtmBirthDate');
			$table->datetime('Inserted');
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
