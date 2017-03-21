<?php

use Illuminate\Database\Seeder;

class AdditionalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('additionals')->insert([
//            BUDGETS
            [
                'id'    => 1,
                'name'=>'patentamiento',
            ],[
                'id'    => 2,
                'name'=>'pack service',
            ],
            [
                'id'    => 3,
                'name'=>'seguro',
            ],[
                'id'    => 4,
                'name'=>'flete',
            ],
            [
                'id'    => 5,
                'name'=>'formularios',
            ],[
                'id'    => 6,
                'name'=>'gastos administrativos',
            ],
            [
                'id'    => 7,
                'name'=>'cedula',
            ],[
                'id'    => 8,
                'name'=>'adicional por sucursal',
            ],
            [
                'id'    => 9,
                'name'=>'lo jack',
            ],[
                'id'    =>10,
                'name'=>'larga distancia',
            ],[
                'id'    =>11,
                'name'=>'alta de patente',
            ]
        ]);
    }
}
