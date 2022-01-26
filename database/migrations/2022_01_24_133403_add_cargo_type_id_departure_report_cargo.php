<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCargoTypeIdDepartureReportCargo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('departure_report_cargo', function (Blueprint $table) {
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
      Schema::table('departure_report_cargo', function (Blueprint $table) {
        $table->integer('cargo_types_id')->unsigned()->index();
      });
    }
}
