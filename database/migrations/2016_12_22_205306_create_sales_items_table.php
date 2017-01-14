<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_items', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->double('price_actual',10.2);
            $table->double('patentamiento',10.2);
            $table->double('pack_service',10.2);
            $table->double('cedula',10.2);
            $table->double('alta_patente',10.2);
            $table->double('ad_suc',10.2);
            $table->double('lojack',10.2);
            $table->double('alta_seguro',10.2);
            $table->double('larga_distancia',10.2);
            $table->double('formularios',10.2);

            
            $table->integer('sales_id')->unsigned()->nulleable();
            $table->foreign('sales_id')->references('id')->on('sales');

            $table->integer('items_id')->unsigned()->nulleable();
            $table->foreign('items_id')->references('id')->on('items');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sales_items');
    }
}
