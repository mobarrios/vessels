<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('services', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->softDeletes();

          $table->date('start_date');
          $table->date('end_date');

          $table->string('origin');
          $table->string('destiny');

          $table->string('sap');
          $table->double('movilisation_cost',10,2);

          $table->integer('status');


          $table->integer('vessels_id')->unsigned()->index();
          $table->foreign('vessels_id')->references('id')->on('vessels')->onDelete('cascade');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('services');

    }
}
