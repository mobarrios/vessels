<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_request', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->integer('status');

            $table->integer('branches_from_id')->unsigned()->nullable();
            //$table->foreign('branches_from_id')->references('id')->on('branches');

            $table->integer('branches_to_id')->unsigned()->nullable();
            $table->foreign('branches_to_id')->references('id')->on('branches');

            $table->integer('sales_id')->unsigned()->nullable();
           // $table->foreign('sales_id')->references('id')->on('sales');

            $table->integer('items_id')->unsigned()->nullable();
            //$table->foreign('items_id')->references('id')->on('items');

            $table->integer('my_request_id')->unsigned()->nullable();
            $table->foreign('my_request_id')->references('id')->on('my_request');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('items_request');

    }
}
