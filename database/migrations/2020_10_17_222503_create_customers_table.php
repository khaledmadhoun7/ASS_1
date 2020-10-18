<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('salesRepEmployeeNum');
            $table->string('Name','255');
            $table->string('FirstName','255');
            $table->string('LastName','255');
            $table->string('Phone','255');
            $table->string('Address1','255');
            $table->string('Address2','255');
            $table->string('City','255');
            $table->string('State','255');
            $table->integer('PostalCode');
            $table->string('Country','255');
            $table->integer('CreditLimit');
            $table->date('updated_at');
            $table->date('created_at');
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
