<?php

use Illuminate\Database\Seeder;

class ModelsPruebaSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('models')->insert([
            [
                'id' => 1,
                'name' => 'Biz 125 New',
                'brands_id' => 1,
                'status' => 1,

            ], [
                'id' => 2,
                'name' => 'XR 150',
                'brands_id' => 1,
                'status' => 1,

            ], [
                'id' => 3,
                'name' => 'CB 190 Repsol',
                'brands_id' => 1,
                'status' => 1,


            ], [
                'id' => 4,
                'name' => 'T110 Crypton Base sin Disco',
                'brands_id' => 2,
                'status' => 1,

            ], [
                'id' => 5,
                'name' => 'T110 Crypton Full',
                'brands_id' => 2,
                'status' => 1,

            ], [
                'id' => 6,
                'name' => 'FZ FI',
                'brands_id' => 2,
                'status' => 1,


            ],

        ]);


    }
}
