<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->string('rs1_razon_social');
            $table->string('rs1_nombre_fantasia');
            $table->string('rs1_direccion');
            $table->string('rs1_telefono');
            $table->string('rs1_cuit');
            $table->string('rs1_condicion_iva');
            $table->string('rs1_inicio_actividades');

            $table->string('rs2_razon_social');
            $table->string('rs2_nombre_fantasia');
            $table->string('rs2_direccion');
            $table->string('rs2_telefono');
            $table->string('rs2_cuit');
            $table->string('rs2_condicion_iva');
            $table->string('rs2_inicio_actividades');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('company');
    }
}
