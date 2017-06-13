<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->string('name');
            $table->string('address');
            $table->string('phone');

            $table->double('alta_patente_importe',10.2);
            $table->double('larga_distancia_importe',10.2);

            $table->integer('localidades_id')->nullable()->unsigned();
            $table->foreign('localidades_id')->references('id')->on('localidades');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('registros');

    }
}
