<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->date('date');
            
            $table->integer('clients_id')->unsigned()->nulleable();
            $table->foreign('clients_id')->references('id')->on('clients');

            $table->int('seguro')->nullable();
            $table->int('flete')->nullable();
            $table->int('formularios')->nullable();
            $table->int('gastosAdministrativos')->nullable();
            $table->int('descuento')->nullable();
            $table->int('anticipo')->nullable();
            $table->int('importeCuota')->nullable();
            $table->int('aFinanciar')->nullable();
            $table->int('total')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('budgets');
    }
}
