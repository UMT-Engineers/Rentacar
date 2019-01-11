<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->increments('raid');
            $table->unsignedInteger('cid');
            $table->float('hour');
            $table->float('day');
            $table->float('week');
            $table->timestamps();
        });
        Schema::table('posts', function (Blueprint $table) {

            // $table->foreign('cid')->references('cid')->on('cars');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rates');
    }
}
