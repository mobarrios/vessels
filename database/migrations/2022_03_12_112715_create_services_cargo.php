<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesCargo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('services_cargo', function (Blueprint $table) {

      $table->increments('id');
      $table->timestamps();
      $table->softDeletes();

      $table->integer('services_id')->unsigned()->index();
      $table->foreign('services_id')->references('id')->on('services')->onDelete('cascade');

      $table->integer('quantity');
      $table->integer('um');

      $table->integer('sectors_id')->unsigned()->index();
      $table->integer('cargo_types_id')->unsigned()->index();

      });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('services_cargo');
    }
}
