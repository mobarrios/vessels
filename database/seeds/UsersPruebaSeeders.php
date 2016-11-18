<?php

use Illuminate\Database\Seeder;

class UsersPruebaSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 5; $i < 500; $i++){

            DB::table('users')->insert([
                "id" => $i,
                "name" => $faker->name(),
                "last_name" => $faker->lastName(),
                "email" => $faker->email(),
                "password" => \Illuminate\Support\Facades\Hash::make('1234')
            ]);

        }
    }
}
