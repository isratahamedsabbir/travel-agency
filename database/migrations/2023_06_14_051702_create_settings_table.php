<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->default('md');
            $table->string('last_name')->default('admin');
            $table->string('icon')->default('icon.png');
            $table->string('title')->default('ture agency site.');
            $table->string('author')->default('admin');
            $table->longText('keywords')->default('ture, agency');
            $table->longText('description')->default('ture agency site.');
            $table->string('email')->default('admin@mail.com');
            $table->string('mobile')->default('01775567493');
            $table->longText('address')->default('dhaka, bangladesh');
            $table->string('facebook')->default(null);
            $table->string('twitter')->default(null);
            $table->string('linkedin')->default(null);
            $table->string('instagram')->default(null);
            $table->string('youtube')->default(null);
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
        Schema::dropIfExists('settings');
    }
}
