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
                    'cuit' => '23119391369',
                    'iva_conditions_id' => 1,
                    'inicio_actividades' => '23-07-93',
                    'ingresos_brutos' => '23119391369'

                ], [
                    'id' => 2,
                    'razon_social' => 'Juan Pablo DeTitta',
                    'nombre_fantasia' => 'New Planet DT S.A.',
                    'direccion' => 'Av. Ricardo Balbin, 451 , SAN MIGUEL, BUENOS AIRES',
                    'telefono' => '1144517168',
                    'cuit' => '33709645809',
                    'iva_conditions_id' => 1,
                    'inicio_actividades' => '01-06-2006',
                    'ingresos_brutos' => '33709645809'

                ],
                [
                    'id' => 3,
                    'razon_social' => 'MOTONET S.R.L.',
                    'nombre_fantasia' => 'Motonet S.R.L.',
                    'direccion' => 'PUEYRREDON AV. 740 DEPTO.A CIUDAD DE BUENOS AIRES',
                    'telefono' => '1144517168',
                    'cuit' => '30714342211',
                    'iva_conditions_id' => 1,
                    'inicio_actividades' => '01-01-2014',
                    'ingresos_brutos' => '9017077172'

                ]
            ]
        );
    }
}
