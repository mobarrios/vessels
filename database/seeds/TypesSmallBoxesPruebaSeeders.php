<?php

use Illuminate\Database\Seeder;

class TypesSmallBoxesPruebaSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('types_small_boxes')->insert([
            [
                'id' => 1,
                'name' => 'Kiosco',

            ], [
                'id' => 2,
                'name' => 'Libreria',


            ], [
                'id' => 3,
                'name' => 'Supermercado',


            ], [
                'id' => 4,
                'name' => 'Agua',

            ], [
                'id' => 5,
                'name' => 'Electricidad',

            ], [
                'id' => 6,
                'name' => 'Gas',


            ],[
                'id' => 7,
                'name' => 'Telefonía e Internet',


            ]
        ]);


    }
}
