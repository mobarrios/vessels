<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesVouchers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files_vouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();

            $table->integer('files_id')->unsigned();
            $table->foreign('files_id')->references('id')->on('files')->onDelete('cascade');

            $table->integer('vouchers_id')->unsigned();
            $table->foreign('vouchers_id')->references('id')->on('vouchers')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('files_vouchers');
    }
}
