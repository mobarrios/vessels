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
                'types_id' => 1,
                
            ], [
                'id' => 2,
                'name' => 'XR 250 TORNADO',
                'brands_id' => 1,
                'status' => 1,
                'types_id' => 1,

            ],
            [
                'id' => 3,
                'name' => 'CG TITAN',
                'brands_id' => 1,
                'status' => 1,
                'types_id' => 1,


            ], [
                'id' => 4,
                'name' => 'PCX',
                'brands_id' => 1,
                'status' => 1,
                'types_id' => 1,

            ],
            [
                'id' => 5,
                'name' => 'XR 150',
                'brands_id' => 1,
                'status' => 1,
                'types_id' => 1,

            ],
            [
                'id' => 6,
                'name' => 'CB 190 R',
                'brands_id' => 1,
                'status' => 1,
                'types_id' => 1,

            ],
            [
                'id' => 7,
                'name' => 'CB 190 REPOSOL',
                'brands_id' => 1,
                'status' => 1,
                'types_id' => 1,

            ],
            [
                'id' => 8,
                'name' => 'XR 150 RALLY',
                'brands_id' => 1,
                'status' => 1,
                'types_id' => 1,

            ],
            [
                'id' => 9,
                'name' => 'FZ FI',
                'brands_id' => 2,
                'status' => 1,
                'types_id' => 1,

            ],
            [
                'id' => 10,
                'name' => 'CRYPTON NEW FULL',
                'brands_id' => 2,
                'status' => 1,
                'types_id' => 1,

            ],
            [
                'id' => 11,
                'name' => 'YBR 125 ED',
                'brands_id' => 2,
                'status' => 1,
                'types_id' => 1,

            ],
            [
                'id' => 12,
                'name' => 'YBR 125 R',
                'brands_id' => 2,
                'status' => 1,
                'types_id' => 1,

            ],
            [
                'id' => 13,
                'name' => 'XTZ 125',
                'brands_id' => 2,
                'status' => 1,
                'types_id' => 1,

            ],
            [
                'id' => 14,
                'name' => 'XTZ 250',
                'brands_id' => 2,
                'status' => 1,
                'types_id' => 1,

            ],
            [
                'id' => 15,
                'name' => 'FZ FAZER FI',
                'brands_id' => 2,
                'status' => 1,
                'types_id' => 1,

            ],
            [
                'id' => 16,
                'name' => 'FZ FI-S',
                'brands_id' => 2,
                'status' => 1,
                'types_id' => 1,

            ],
            [
                'id' => 17,
                'name' => 'ROUSER 200NS',
                'brands_id' => 3,
                'status' => 1,
                'types_id' => 1,

            ],
            [
                'id' => 18,
                'name' => 'ROUSER 135',
                'brands_id' => 3,
                'status' => 1,
                'types_id' => 1,

            ],
            [
                'id' => 19,
                'name' => 'ZB 110 BASE',
                'brands_id' => 4,
                'status' => 1,
                'types_id' => 1,

            ],
            [
                'id' => 20,
                'name' => 'RX 150 G3 E',
                'brands_id' => 4,
                'status' => 1,
                'types_id' => 1,

            ],
            [
                'id' => 21,
                'name' => 'ZR 150',
                'brands_id' => 4,
                'status' => 1,
                'types_id' => 1,

            ],
            [
                'id' => 22,
                'name' => 'SKUA 150',
                'brands_id' => 5,
                'status' => 1,
                'types_id' => 1,

            ],
            [
                'id' => 23,
                'name' => 'CG S2 BASE TUBULAR ',
                'brands_id' => 5,
                'status' => 1,
                'types_id' => 1,

            ],
            [
                'id' => 24,
                'name' => 'CASCO ',
                'brands_id' => 5,
                'status' => 1,
                'types_id' => 2,

            ],
            [
                'id' => 25,
                'name' => 'GUANTES ',
                'brands_id' => 5,
                'status' => 1,
                'types_id' => 2,

            ],



        ]);


    }
}
