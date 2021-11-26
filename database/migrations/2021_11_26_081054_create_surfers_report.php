<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurfersReport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('surfers_report', function (Blueprint $table) {

          $table->increments('id');
          $table->timestamps();
          $table->softDeletes();

          $table->datetime('departure_time');
          $table->datetime('start_trip_time');

          $table->integer('embarqued_pax');
          $table->string('arribal_location');

          $table->integer('desembark_pax');
          $table->integer('std_by_periods');
          $table->integer('mgo_opening_stocks');
          $table->integer('mgo_recived');
          $table->integer('mgo_recived_from');
          $table->integer('mgo_closing_stock');
          $table->integer('mgo_consumed');

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
         Schema::drop('surfers_report');           

    }
}
