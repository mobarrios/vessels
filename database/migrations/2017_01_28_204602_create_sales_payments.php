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

            $table->integer('banks_id');
            $table->string('number');

            $table->date('check_date');
            $table->date('check_pay_date');
            $table->integer('check_types_id');

            $table->string('term');

            $table->date('transf_date');
            $table->integer('financials_id');

            $table->tinyInteger('status')->unsigned()->nullable();



            $table->integer('sales_id')->unsigned()->nullable();
            $table->foreign('sales_id')->references('id')->on('sales');

            $table->integer('pay_methods_id')->unsigned()->nullable();
            $table->foreign('pay_methods_id')->references('id')->on('pay_methods');


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
