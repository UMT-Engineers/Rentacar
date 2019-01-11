<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('reid');
            $table->unsignedInteger('cuid');
            $table->unsignedInteger('did');
            $table->timestamps();
        });
        Schema::table('posts', function (Blueprint $table) {

            // $table->foreign('cid')->references('cid')->on('cars');
            // $table->foreign('did')->references('did')->on('drivers');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
