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
            
            $table->string('dominio1');
            $table->string('tramite1');
            $table->string('solicitud_tipo1');
            $table->string('n_control1');

            $table->string('dominio2')->nullable();
            $table->string('tramite2')->nullable();
            $table->string('solicitud_tipo2')->nullable();
            $table->string('n_control2')->nullable();

            $table->string('dominio3')->nullable();
            $table->string('tramite3')->nullable();
            $table->string('solicitud_tipo3')->nullable();
            $table->string('n_control3')->nullable();

            $table->string('dominio4')->nullable();
            $table->string('tramite4')->nullable();
            $table->string('solicitud_tipo4')->nullable();
            $table->string('n_control4')->nullable();

            $table->string('dominio5')->nullable();
            $table->string('tramite5')->nullable();
            $table->string('solicitud_tipo5')->nullable();
            $table->string('n_control5')->nullable();

            $table->string('observaciones')->nullable();

            $table->integer('files_id')->unsigned();
            $table->foreign('files_id')->references('id')->on('files')->onDelete('cascade');


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
