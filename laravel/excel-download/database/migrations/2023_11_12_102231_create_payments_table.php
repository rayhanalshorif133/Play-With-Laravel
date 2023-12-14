<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Database\Seeders\PaymentSeeder;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('pos_info');
            $table->string('payment_method');
            $table->string('payment_status');
            $table->string('payment_history');
            $table->string('payment_amount');
            $table->string('due_amount');
            $table->string('payment_approval');
            $table->timestamps();
        });

        $paymentSeeder = new PaymentSeeder();
        $paymentSeeder->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
