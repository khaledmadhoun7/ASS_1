<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_ID')->nullable();
            $table->unsignedBigInteger('product_code')->nullable();
            $table->integer('Qty');
            $table->double('PriceEach');
            $table->date('updated_at');
            $table->date('created_at');

            $table->foreign('order_ID')->references('id')->on('orders');
            $table->foreign('product_code')->references('Code')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_products');
    }
}
