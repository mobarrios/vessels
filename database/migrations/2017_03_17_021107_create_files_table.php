<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

//            FACTURAS Y REMITOS
            $table->integer('invoices_copia1')->unsigned()->nullable();
            $table->integer('invoices_copia2')->unsigned()->nullable();


            $table->integer('sender')->unsigned()->nullable();


//            FORMULARIOS
            $table->integer('form_01')->unsigned()->nullable();
            $table->string('form_01_file')->nullable();
            $table->integer('form_12')->unsigned()->nullable();
            $table->string('form_12_file')->nullable();
            $table->integer('form_59')->unsigned()->nullable();
            $table->string('form_59_file')->nullable();



//            FÍSICOS
            $table->tinyInteger('dni_photocopy')->nullable();
            $table->string('dni_photocopy_file')->nullable();

            $table->tinyInteger('proof_of_cuil')->nullable();
            $table->string('proof_of_cuil_file')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('files');
    }
}
