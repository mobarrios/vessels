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
                'name' => 'Biz 150 New',
                'brands_id' => 1,
                'status' => 1,
                'patentamiento' => rand(111,999),
                'pack_service' => rand(111,999),

            ], [
                'id' => 2,
                'name' => 'XR 250 TORNADO',
                'brands_id' => 1,
                'status' => 1,
                'patentamiento' => rand(111,999),
                'pack_service' => rand(111,999),

            ], [
                'id' => 3,
                'name' => 'FZ FI',
                'brands_id' => 2,
                'status' => 1,
                'patentamiento' => rand(111,999),
                'pack_service' => rand(111,999),

            ], [
                'id' => 4,
                'name' => 'ROUSER 200NS',
                'brands_id' => 3,
                'status' => 1,
                'patentamiento' => rand(111,999),
                'pack_service' => rand(111,999),
            ], [
                'id' => 5,
                'name' => 'ROUSER 135',
                'brands_id' => 3,
                'status' => 1,
                'patentamiento' => rand(111,999),
                'pack_service' => rand(111,999),
            ], [
                'id' => 6,
                'name' => 'ZB 110 BASE',
                'brands_id' => 4,
                'status' => 1,
                'patentamiento' => rand(111,999),
                'pack_service' => rand(111,999),

            ],[
                'id' => 7,
                'name' => 'RX 150 G3 E',
                'brands_id' => 4,
                'status' => 1,
                'patentamiento' => rand(111,999),
                'pack_service' => rand(111,999),

            ],[
                'id' => 8,
                'name' => 'ZR 150',
                'brands_id' => 4,
                'status' => 1,
                'patentamiento' => rand(111,999),
                'pack_service' => rand(111,999),

            ],[
                'id' => 9,
                'name' => 'SKUA 150',
                'brands_id' => 5,
                'status' => 1,
                'patentamiento' => rand(111,999),
                'pack_service' => rand(111,999),

            ],[
                'id' => 10,
                'name' => 'CG S2 BASE TUBULUAR',
                'brands_id' => 5,
                'status' => 1,
                'patentamiento' => rand(111,999),
                'pack_service' => rand(111,999),

            ],

        ]);


    }
}
