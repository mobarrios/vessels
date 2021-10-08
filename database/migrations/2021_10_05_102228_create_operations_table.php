<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('operations', function (Blueprint $table) {

          $table->increments('id');
          $table->timestamps();
          $table->softDeletes();

          $table->datetime('start_date');
          $table->datetime('end_date');

          $table->double('quantity',10,2);
          $table->integer('status');
          $table->string('comments');


          $table->integer('services_id')->unsigned()->index();
          $table->foreign('services_id')->references('id')->on('services')->onDelete('cascade');

          $table->integer('sectors_id')->unsigned()->index();
          $table->foreign('sectors_id')->references('id')->on('sectors')->onDelete('cascade');

          $table->integer('users_id')->unsigned()->index();
          $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');

          $table->integer('cargo_types_id')->unsigned()->index();
          $table->foreign('cargo_types_id')->references('id')->on('cargo_types')->onDelete('cascade');

          $table->integer('operations_types_id')->unsigned()->index();
          $table->foreign('operations_types_id')->references('id')->on('operations_types')->onDelete('cascade');

          $table->integer('locations_id')->unsigned()->index();
          $table->foreign('locations_id')->references('id')->on('locations')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('operations');
    }
}
