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
            $tble->string('name');
            $tble->string('email');
            $tble->string('phone');
            $tble->double('amount');
            $tble->longText('address');
            $tble->string('status');
            $tble->string('transaction_id');
            $tble->string('currency');
            $tble->integer('country');
            $tble->integer('city');
            $tble->integer('postcode');
            $tble->string('title');
            $tble->integer('category');
            $tble->integer('subcategory');
            $tble->string('type');
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
