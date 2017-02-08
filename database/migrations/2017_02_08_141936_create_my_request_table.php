<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_request', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->integer('actual_status');
            $table->integer('quantity');

            $table->integer('models_id')->unsigned()->nulleable();
            $table->foreign('models_id')->references('id')->on('models');

            $table->integer('colors_id')->unsigned()->nulleable();
            $table->foreign('colors_id')->references('id')->on('colors');

            $table->integer('users_id')->unsigned()->nulleable();
            $table->foreign('users_id')->references('id')->on('users');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('my_request');
    }
}
