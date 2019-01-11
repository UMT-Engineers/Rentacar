<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('resid');
            $table->unsignedInteger('pickup_l');
            $table->unsignedInteger('drop_l');
            $table->datetime('pickup_start');
            $table->datetime('pickup_end');
            $table->unsignedInteger('cuid');
            $table->unsignedInteger('cid');
            $table->unsignedInteger('did');
            $table->unsignedInteger('pid');
            $table->integer('luggage');
            $table->integer('passengers');
            $table->string('servicetype');
            $table->timestamps();
        });
        Schema::table('posts', function (Blueprint $table) {
        
        
            // $table->foreign('pickup_l')->references('lid')->on('locations');
            // $table->foreign('drop_l')->references('lid')->on('locations');
            // $table->foreign('cuid')->references('cuid')->on('customers');
            // $table->foreign('cid')->references('cid')->on('cars');
            // $table->foreign('did')->references('did')->on('drivers');
            // $table->foreign('pid')->references('pid')->on('payments');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
