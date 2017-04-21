<?php

use Illuminate\Database\Seeder;

class CompanySeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company')->insert([
                [
                    'id' => 1,
                    'razon_social' => 'Jorge A. DeTitta',
                    'nombre_fantasia' => 'Zayade',
                    'direccion' => 'Av. Balbin 486, San Miguel , Buenos Aires',
                    'telefono' => '11 4451 7168',
                    'cuit' => '23-11939136-9',
                    'iva_conditions_id' => 1,
                    'inicio_actividades' => '23-07-93',
                    'ingresos_brutos' => '23-111112222-3'

                ], [
                    'id' => 2,
                    'razon_social' => 'Juan Pablo  DeTitta',
                    'nombre_fantasia' => 'Yamasan',
                    'direccion' => 'Av. Balbin 480, San Miguel , Buenos Aires',
                    'telefono' => '11 4451 7168',
                    'cuit' => '32-11939136-9',
                    'iva_conditions_id' => 1,
                    'inicio_actividades' => '23-07-93',
                    'ingresos_brutos' => '23-112212222-3'

                ]]
        );
    }
}
