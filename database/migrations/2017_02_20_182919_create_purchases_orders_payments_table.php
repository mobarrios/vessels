<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesOrdersPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases_orders_payments', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->integer('purchases_orders_id')->unsigned();
            $table->foreign('purchases_orders_id')->references('id')->on('purchases_orders');

            $table->integer('payments_id')->unsigned();
            $table->foreign('payments')->references('id')->on('payments');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('purchases_orders_payments');
    }
}
