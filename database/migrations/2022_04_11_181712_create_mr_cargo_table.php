<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMrCargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('dmr_cargo', function (Blueprint $table) {

      $table->increments('id');
      $table->timestamps();
      $table->softDeletes();

      $table->integer('dm_report_id')->unsigned()->index();
      $table->foreign('dm_report_id')->references('id')->on('dm_report')->onDelete('cascade');

      $table->integer('services_cargo_id')->unsigned()->index();
      $table->foreign('services_cargo_id')->references('id')->on('services_cargo')->onDelete('cascade');

      $table->integer('rob');
      $table->integer('cons');
      $table->integer('initial_stock');
      $table->integer('ohstock');
      $table->integer('recieved');
      $table->integer('delievered');
      $table->integer('correction');
      $table->string('obs');

      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('dmr_cargo');
    }
}
