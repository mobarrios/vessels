<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->string('name');
            $table->string('last_name');
            $table->string('email');
            $table->string('dni');
            $table->enum('sexo',['masculino','femenino']);
            $table->enum('marital_status',['soltero','casado','divorciado']);
            $table->date('dob');
            $table->string('nacionality');

            $table->string('phone1');
            $table->string('phone2');

            $table->string('address');
            $table->string('city');
            $table->string('location');
            $table->string('province');
            
            $table->text('obs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
