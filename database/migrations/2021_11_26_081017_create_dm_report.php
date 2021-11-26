<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDmReport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('dm_report', function (Blueprint $table) {

          $table->increments('id');
          $table->timestamps();
          $table->softDeletes();

          $table->integer('docker_area_loaded');
          $table->integer('main_engine_hours');
          $table->integer('thrusted_hours');
          $table->integer('drills_carried_out');
          $table->integer('fifi_monitor_test');
          $table->integer('incidents_accidents');
          $table->integer('main_engines');
          $table->integer('propellers');
          $table->integer('dp');
          $table->integer('ah');
          $table->integer('mgo_trf_sys');
          $table->integer('bulk_cargo_sys');
          $table->integer('pax_capacity');
          $table->integer('fifi_capability');
          $table->integer('oil_resp');
          $table->integer('helideck');
          $table->integer('main_crane');
          $table->integer('rov');
          $table->string('obs');


          $table->integer('services_id')->unsigned()->index();
          $table->foreign('services_id')->references('id')->on('services')->onDelete('cascade');

          $table->integer('locations_id')->unsigned()->index();
          $table->foreign('locations_id')->references('id')->on('locations')->onDelete('cascade');

        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
                Schema::drop('dm_report');           
    }
}
