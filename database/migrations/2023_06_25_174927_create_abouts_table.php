<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
			$table->string('main_img');
			$table->string('title');
			$table->longText('description');
			$table->string('left_img');
			$table->string('right_img');
			$table->string('one_name');
			$table->string('one_icon');
			$table->string('one_title');
			$table->string('two_name');
			$table->string('two_icon');
			$table->string('two_title');
			$table->string('three_name');
			$table->string('three_icon');
			$table->string('three_title');
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
        Schema::dropIfExists('abouts');
    }
}
