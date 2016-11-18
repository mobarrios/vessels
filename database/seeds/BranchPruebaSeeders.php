<?php

use Illuminate\Database\Seeder;

class BranchPruebaSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 3; $i < 500; $i++){

            DB::table('branches')->insert([
                "id" => $i,
                "name" => $faker->company(),
                "address" => $faker->address(),
                "phone" => $faker->phoneNumber(),
                "type" => ""
            ]);

        }
    }
}
