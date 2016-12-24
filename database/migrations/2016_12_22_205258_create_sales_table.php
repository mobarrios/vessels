<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->date('date');
            $table->date('date_confirm');
            $table->string('number');
            $table->enum('type',['Reserva','Venta']);


            $table->integer('users_id')->unsigned()->nulleable();
            $table->foreign('users_id')->references('id')->on('clients');

            $table->integer('clients_id')->unsigned()->nulleable();
            $table->foreign('clients_id')->references('id')->on('clients');

            $table->integer('budgets_id')->unsigned()->nulleable();
            $table->foreign('budgets_id')->references('id')->on('budgets')->nulleable();

            $table->integer('contacts_id')->unsigned()->nulleable();
//            $table->foreign('contacts_id')->references('id')->on('contacts')->nulleable();

            $table->integer('branches_confirm_id')->unsigned()->nulleable();
            $table->foreign('branches_confirm_id')->references('id')->on('branches')->nulleable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sales');
    }
}
