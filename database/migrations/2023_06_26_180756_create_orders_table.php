<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->double('amount');
            $table->longText('address');
            $table->string('status');
            $table->string('transaction_id');
            $table->string('currency');
            $table->integer('country');
            $table->integer('city');
            $table->integer('postcode');
            $table->string('title');
            $table->integer('category');
            $table->integer('subcategory');
            $table->string('type');
			$table->integer('new')->default(true);
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
        Schema::dropIfExists('orders');
    }
}
