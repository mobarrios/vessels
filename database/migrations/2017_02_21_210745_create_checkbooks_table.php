<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkbooks', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->string('n_cheque');
            $table->date('from')->nullable();
            $table->date('to')->nullable();
            $table->double('amount')->nullable();
            $table->date('payment_date')->nullable();
            $table->date('due_date')->nullable();
            $table->tinyInteger('type');

            $table->integer('banks_id')->unsigned();
            $table->foreign('banks_id')->references('id')->on('banks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('checkbooks');
    }
}
