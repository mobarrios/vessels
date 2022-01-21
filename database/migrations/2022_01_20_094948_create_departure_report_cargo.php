<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartureReportCargo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('departure_report_cargo', function (Blueprint $table) {

       $table->increments('id');
       $table->timestamps();
       $table->softDeletes();

       $table->integer('departure_report_id')->unsigned()->index();
       $table->foreign('departure_report_id')->references('id')->on('departure_report')->onDelete('cascade');

       $table->integer('quantity');
       $table->integer('um');

       $table->integer('sectors_id')->unsigned()->index();

     });

     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('departure_report_cargo');
    }
}
