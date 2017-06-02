<?php

use Illuminate\Database\Seeder;

class BranchSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'Planet Honda San Miguel',
                    'company_id' => 2,
                    'punto_venta' => '0012',
                    'address'=> 'AV.RICARDO BALBIN 451, SAN MIGUEL',
                ],
                [
                    'id' => 2,
                    'name' => 'Logistica',
                    'company_id' => 1,
                    'punto_venta' => '001',
                    'address'=> 'Ruta 8',
                ],

                [
                    'id' => 3,
                    'name' => 'New Planet Honda Morón',
                    'company_id' => 2,
                    'punto_venta' => '0167',
                    'address'=> 'AV. RIVADAVIA 18175, MORON ',
                ],

                [
                    'id' => 4,
                    'name' => 'Zayade',
                    'company_id' => 1,
                    'punto_venta' => '000',
                    'address'=> 'AV.MITRE 486, SAN MIGUEL',
                ],

                [
                    'id' => 5,
                    'name' => 'New Planet Pilar',
                    'company_id' => 2,
                    'punto_venta' => '0034',
                    'address'=> 'AV.TRATADO DEL PILAR 131, PILAR',
                ],
                
            ]
        );
    }
}
