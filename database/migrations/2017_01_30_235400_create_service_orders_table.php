<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_orders', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->integer('clients_id')->unsigned()->nulleable();
            $table->foreign('clients_id')->references('id')->on('clients');

            $table->integer('items_id')->unsigned()->nulleable();
            $table->foreign('items_id')->references('id')->on('items');

            $table->string('patente');

//            ESTADO GRAL DEL VEHICULOS
            $table->string('km_hs');
            $table->tinyInteger('fluido_radiador');
            // [1 => 'max',2 => 'med', 3 => 'min']

            $table->tinyInteger('fluido_frenos');
            // [1 => 'max',2 => 'med', 3 => 'min']

            $table->tinyInteger('combustible');
            // [1 => 'F',2 => '3/4', 3 => '1/2', 4 => '1/4', 5 => 'R']

            $table->tinyInteger('nivel_aceite');
            // [1 => 'max',2 => 'med', 3 => 'min']

            $table->boolean('kit_herramientas');
            $table->boolean('casco');
            $table->boolean('moto_sin_averias');

//            OBSERVACIONES
            $table->string('observaciones');

//            INSPECCIÓN DE 24 ITEMS
            $table->boolean('luces_tablero');
            $table->boolean('bocina');
            $table->boolean('giros');
            $table->boolean('punios');
            $table->boolean('luz_baja_alta');
            $table->boolean('palanca_de_embrague');
            $table->boolean('cable_de_embrague');
            $table->boolean('palanca_de_freno');
            $table->boolean('cable_de_freno');
            $table->boolean('luz_freno');
            $table->boolean('luz_freno_opcion');
            $table->boolean('cable_de_acelerador');
            $table->boolean('espejos_retrovisores');
            $table->boolean('amortiguadores_delanteros');
            $table->boolean('cinta_o_pastilla_freno_delantero');
            $table->boolean('disco_freno_delantero');
            $table->boolean('neumatico_delantero');
            $table->boolean('pedal_freno_trasero');
            $table->boolean('amortiguadores_traseros');
            $table->boolean('cinta_o_pastilla_freno_trasero');
            $table->boolean('disco_freno_trasero');
            $table->boolean('neumatico_trasero');
            $table->boolean('sistema_de_transmision');
            $table->boolean('pedal_de_cambios');
            $table->boolean('sosten_lateral_caballete_pedalines');

//          ENTREGA
            $table->date('fecha_entrega');

            $table->string('entrega_item1');
            $table->string('entrega_descripcion_item1');

            $table->string('entrega_item2');
            $table->string('entrega_descripcion_item2');

            $table->string('entrega_item3');
            $table->string('entrega_descripcion_item3');

//            DIAGNOSTICO
            $table->string('diagnostico_item1');
            $table->string('diagnostico_descripcion_item1');

            $table->string('diagnostico_item2');
            $table->string('diagnostico_descripcion_item2');

            $table->string('diagnostico_item3');
            $table->string('diagnostico_descripcion_item3');

//            REPUESTOS E INSTRUMENTOS
            $table->string('repuestos_cantidad1');
            $table->string('repuestos_descripcion1');

            $table->string('repuestos_cantidad2');
            $table->string('repuestos_descripcion2');

            $table->string('repuestos_cantidad3');
            $table->string('repuestos_descripcion3');

            $table->string('instrumento_de_medicion1');
            $table->string('instrumento_de_medicion2');

            $table->string('tiempo_mano_de_obra');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('service_orders');
    }
}
