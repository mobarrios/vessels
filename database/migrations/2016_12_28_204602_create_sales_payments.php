<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesPayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_payments', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->date('date');
            $table->double('amount',10.2);
            $table->string('ccn');
            $table->string('ccc');
            $table->string('cce');

            $table->integer('sales_id')->unsigned()->nulleable();
            $table->foreign('sales_id')->references('id')->on('sales');

            $table->integer('financials_id')->unsigned()->nulleable();
            $table->foreign('financials_id')->references('id')->on('financials');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sales_payments');
    }
}
