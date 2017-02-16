<?php

use Illuminate\Database\Seeder;

class  ModelsListsPricesPruebaSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('models_lists_prices')->insert([
            [
                'id' => 1,
                'number' => 'Honda Febrero 2017',
                'status' => 0,
                'providers_id' => 1,
            ],
            [
                'id' => 2,
                'number' => 'Yamaha Febrero 2017',
                'status' => 0,
                'providers_id' => 2,
            ],
            [
                'id' => 3,
                'number' => 'Bajaj Febrero 2017',
                'status' => 0,
                'providers_id' => 3,
            ],
            [
                'id' => 4,
                'number' => 'Zanella Febrero 2017',
                'status' => 0,
                'providers_id' => 4,
            ],
            [
                'id' => 5,
                'number' => 'Motomel Febrero 2017',
                'status' => 0,
                'providers_id' => 5,
            ],
        ]);


    }
}
