<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForm59Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_59', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->softDeletes();


            $table->string('cod_inscripcion')->nullable();
            
            $table->string('dominio');
            $table->string('tramite');
            $table->string('solicitud_tipo');
            $table->string('n_control');

            $table->string('observaciones')->nullable();

            $table->integer('files_id')->unsigned();
            $table->foreign('files_id')->references('id')->on('files')->onDelete('cascade');


            $table->integer('forms_id')->unsigned();
            $table->foreign('forms_id')->references('id')->on('forms')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('form_59');
    }
}
