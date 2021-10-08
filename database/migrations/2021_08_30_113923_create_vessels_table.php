<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVesselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('vessels', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->softDeletes();

          $table->string('name');
          $table->string('class_society');
          $table->string('class_notation');
          $table->string('power');
          $table->string('dock_area');
          $table->string('bollar_pull');
          $table->string('fi_fi');
          $table->string('total_berths');
          $table->string('pax_seats');

          $table->integer('company_id')->unsigned()->index();
          $table->foreign('company_id')->references('id')->on('company')->onDelete('cascade');

          $table->integer('vessels_types_id')->unsigned()->index();
          $table->foreign('vessels_types_id')->references('id')->on('vessels_types')->onDelete('cascade');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vessels');

    }
}
