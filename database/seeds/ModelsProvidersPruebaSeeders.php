<?php

use Illuminate\Database\Seeder;

class ModelsProvidersPruebaSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('models_providers')->insert([
            [
                'id' => 1,
                'models_id' => 1,
                'providers_id' => 1,
            ],
            [
                'id' => 2,
                'models_id' => 2,
                'providers_id' => 1,
            ],
            [
                'id' => 3,
                'models_id' => 3,
                'providers_id' => 1,
            ],
            [
                'id' => 4,
                'models_id' => 4,
                'providers_id' => 1,
            ],
            [
                'id' => 5,
                'models_id' => 5,
                'providers_id' => 1,
            ],
            [
                'id' => 6,
                'models_id' => 6,
                'providers_id' => 1,
            ],
            [
                'id' => 7,
                'models_id' => 7,
                'providers_id' => 1,
            ],
            [
                'id' => 8,
                'models_id' => 8,
                'providers_id' => 1,
            ],
            [
                'id' => 9,
                'models_id' => 9,
                'providers_id' => 2,
            ],

            [
                'id' => 10,
                'models_id' => 10,
                'providers_id' => 2,
            ],
            [
                'id' => 11,
                'models_id' => 11,
                'providers_id' => 2,
            ],
            [
                'id' => 12,
                'models_id' => 12,
                'providers_id' => 2,
            ],
            [
                'id' => 13,
                'models_id' => 13,
                'providers_id' => 2,
            ],
            [
                'id' => 14,
                'models_id' => 14,
                'providers_id' => 2,
            ],
            [
                'id' => 15,
                'models_id' => 15,
                'providers_id' => 2,
            ],
            [
                'id' => 16,
                'models_id' => 16,
                'providers_id' => 2,
            ],

            [
                'id' => 17,
                'models_id' => 17,
                'providers_id' => 3,
            ],
            [
                'id' => 18,
                'models_id' => 18,
                'providers_id' => 3,
            ],
            [
                'id' => 19,
                'models_id' => 19,
                'providers_id' => 4,
            ],
            [
                'id' => 20,
                'models_id' => 20,
                'providers_id' => 4,
            ],
            [
                'id' => 21,
                'models_id' => 21,
                'providers_id' => 4,
            ],
            [
                'id' => 22,
                'models_id' => 22,
                'providers_id' => 5,
            ],
            [
                'id' => 23,
                'models_id' => 23,
                'providers_id' => 5,
            ],

        ]);


    }
}
