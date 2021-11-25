<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartureReport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departure_report', function (Blueprint $table) {

          $table->increments('id');
          $table->timestamps();
          $table->softDeletes();

          $table->datetime('departure_time');
          $table->integer('cargo_tonnage');
          $table->integer('docker_area_loaded');
          $table->integer('garbage_disembark');
          $table->integer('garbage_arribal');
          $table->integer('mgo_required');
          $table->integer('fw_required');
          $table->integer('pob');
          $table->integer('pax_inbound');
          $table->integer('pax_outbound');

          $table->integer('services_id')->unsigned()->index();
          $table->foreign('services_id')->references('id')->on('services')->onDelete('cascade');

          $table->integer('locations_id')->unsigned()->index();
          $table->foreign('locations_id')->references('id')->on('locations')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('departure_report');           
    }
}
