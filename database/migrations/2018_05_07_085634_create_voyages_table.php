<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoyagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->char('description');
            $table->string('caracteristiques');
            $table->string('climat');
            $table->timestamps();
        });

        Schema::create('user_voyage', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('voyage_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('voyage_id')->references('id')->on('voyages')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voyages');
    }
}
