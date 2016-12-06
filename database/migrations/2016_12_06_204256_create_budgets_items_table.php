<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets_items', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->double('price_actual');
            $table->double('price_budget');


            $table->integer('budgets_id')->unsigned()->nulleable();
            $table->foreign('budgets_id')->references('id')->on('budgets');

            $table->integer('models_id')->unsigned()->nulleable();
            $table->foreign('models_id')->references('id')->on('models');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('budgets_items');
    }
}
