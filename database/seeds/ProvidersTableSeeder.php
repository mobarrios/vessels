<?php

use Illuminate\Database\Seeder;

class ProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 1; $i < 501; $i++){

            DB::table('providers')->insert([
                "id" => $i,
                "name" => $faker->company(),
                "address" => $faker->address(),
                "cuit" => $faker->biasedNumberBetween(20,28).'-'.$faker->randomNumber(8).'-'.$faker->randomNumber(1),
                "email" => $faker->email(),
                "phone" => $faker->phoneNumber()
            ]);

        }
    }
}
