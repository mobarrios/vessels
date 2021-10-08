<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectorsCargoTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sectors_cargo_types', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->softDeletes();

          $table->integer('sectors_id')->unsigned()->index();
          $table->foreign('sectors_id')->references('id')->on('sectors')->onDelete('cascade');

          $table->integer('cargo_types_id')->unsigned()->index();
          $table->foreign('cargo_types_id')->references('id')->on('cargo_types')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('sectors_cargo_types');
    }
}
