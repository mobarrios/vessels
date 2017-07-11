<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnicalServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technical_services', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->string('diagnostico');
            $table->string('patente');
            $table->string('n_motor');
            $table->string('n_cuadro');

            $table->text('observaciones');
            $table->text('descripcion_cliente');

            $table->string('status');

            $table->integer('clients_id')->unsigned()->nullable();
            $table->foreign('clients_id')->references('id')->on('clients');

            $table->integer('clients_items_id')->unsigned()->nullable();
            $table->foreign('clients_items_id')->references('id')->on('items');

            $table->integer('models_id')->unsigned()->nullable();
            $table->foreign('models_id')->references('id')->on('models');

            $table->integer('mecanicos_id')->unsigned()->nullable();
            $table->foreign('mecanicos_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('technical_services');
    }
}
