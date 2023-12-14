<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Database\Seeders\CustomerSeeder;


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
            $table->id();
            $table -> string('serial_no');
            $table -> string('company_name');
            $table -> string('pos_id');
            $table -> string('pos_name');
            $table -> string('email');
            $table -> string('phone_number');
            $table -> string('total_sales');
            $table -> string('total_due');
            $table->timestamps();
        });

        $customerSeeder = new CustomerSeeder();
        $customerSeeder->run();
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
