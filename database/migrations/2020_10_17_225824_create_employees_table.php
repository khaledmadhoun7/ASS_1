<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('office_code')->nullable();
            $table->integer('reportsTo');
            $table->string('FirstName','255');
            $table->string('LastName','255');
            $table->string('Extension','255');
            $table->string('Email','255');
            $table->string('JobTitle','255');
            $table->date('updated_at');
            $table->date('created_at');

            $table->foreign('office_code')->references('Code')->on('offices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
