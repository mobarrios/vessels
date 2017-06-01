<?php

use Illuminate\Database\Seeder;

class ClientsSeedersConFaker extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('es_AR');

        for ($i = 1; $i <= 10; $i++){
            DB::table('clients')->insert([
                [
                    'id' => $i,
                    'name' => $faker->firstName,
                    'last_name' => $faker->lastName,
                    'email' => $faker->freeEmail,
                    'dni' => Faker\Provider\es_Es\Person::dni(),
                    'sexo' => $faker->randomElement(['masculino','femenino']),
                    'dob' => $faker->dateTimeThisCentury->format('Y-m-d'),
                    'address' => $faker->address,
                    'prospecto' => $faker->boolean,
                    'phone1' => $faker->phoneNumber,
                    'nacionality' => Faker\Provider\es_Ar\Address::country(),
                    'city' => $faker->city,
                    'location' => Faker\Provider\es_Ar\Address::community(),
                    'province' => Faker\Provider\es_Ar\Address::state(),

                ]

            ]);
        }
    }
}
