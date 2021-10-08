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
                    'razon_social' => 'Empresa A',
                    'nombre_fantasia' => 'Empresa A',
                    'direccion' => 'Av. 123 , 123',
                    'telefono' => '11 11111',
                    'cuit' => '111111111',
                    'iva_conditions_id' => 1,
                    'inicio_actividades' => '23-07-93',
                    'ingresos_brutos' => '1111111111'

                ]
            ]
        );
    }
}
