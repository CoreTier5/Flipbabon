<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCctvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cctvs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cctv_pic');
            $table->string('category');
            $table->string('sub_category');
            $table->string('brand');
            $table->string('model');
            $table->string('price');
            $table->string('specification');
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
        Schema::dropIfExists('cctvs');
    }
}