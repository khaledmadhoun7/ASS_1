<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('CheckNum','255')->unique();
            $table->unsignedBigInteger('customer_ID')->nullable();
            $table->dateTime('PaymentDate');
            $table->double('Amount');
            $table->date('updated_at');
            $table->date('created_at');

            $table->foreign('customer_ID')->references('id')->on('customers');
        });
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
