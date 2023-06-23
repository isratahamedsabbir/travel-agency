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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('icon');
            $table->string('title');
            $table->string('author');
            $table->longText('keywords');
            $table->longText('description');
            $table->string('email');
            $table->string('mobile');
            $table->longText('address');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('instagram');
            $table->string('youtube');
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
