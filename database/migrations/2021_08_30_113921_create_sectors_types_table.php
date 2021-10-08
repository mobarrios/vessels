<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectorsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sectors_types', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->softDeletes();

          $table->string('name');

        });

     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('sectors_types');
    }
}
