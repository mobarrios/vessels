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
        $faker = Faker\Factory::create();

        for($i = 0; $i < 5; $i++){

            DB::table('models')->insert([
                "id" => $i,
                "status" => $faker->company(),
                "phone" => $faker->phoneNumber(),
                "type" => ""
            ]);

        }
    }
}
