<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnicalServiceServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technical_services_services', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->softDeletes();


            $table->integer('technical_services_id')->unsigned()->nullable();
            $table->foreign('technical_services_id')->references('id')->on('technical_services');

            $table->integer('services_id')->unsigned()->nullable();
            $table->foreign('services_id')->references('id')->on('services');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('technical_services_services');
    }
}
