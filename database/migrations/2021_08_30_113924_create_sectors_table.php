<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sectors', function (Blueprint $table)
      {
          $table->increments('id');
          $table->timestamps();
          $table->softDeletes();

          $table->string('name');
          $table->integer('capacities');
          $table->string('um');


          $table->integer('vessels_id')->unsigned()->index();
          $table->foreign('vessels_id')->references('id')->on('vessels')->onDelete('cascade');

          $table->integer('sectors_types_id')->unsigned()->index();
          $table->foreign('sectors_types_id')->references('id')->on('sectors_types')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('sectors');
    }
}
