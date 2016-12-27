<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('budgets', function (Blueprint $table) {
            $table->double('seguro',10,2)->nullable();
            $table->double('flete',10,2)->nullable();
            $table->double('formularios',10,2)->nullable();
            $table->double('gastos_administrativos',10,2)->nullable();
            $table->double('descuento',10,2)->nullable();
            $table->double('anticipo',10,2)->nullable();
            $table->double('importeCuota',10,2)->nullable();
            $table->double('a_financiar',10,2)->nullable();
            $table->double('modo_financiamiento',10,2)->nullable();
            $table->double('total',10,2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('budgets', function ($table) {
            $table->dropColumn(['seguro','flete','formularios','gastosAdministrativos','descuento','anticipo','importeCuota','aFinanciar','total','modo_financiamiento']);
        });
    }
}
