<?php

use Illuminate\Database\Seeder;

class ClientsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            [
                'id' => 1,
                'name' => 'Juan',
                'last_name' => 'Perez',
                'email' => 'jp@hotmail.com',
                'dni' => '2790999887',
                'sexo' => 'masculino',
                'dob' => '1980-23-02',
                'address' => 'Debussy 2282',
                'prospecto' => 1,
            ], [
                'id' => 2,
                'name' => 'Juana',
                'last_name' => 'Rodriguez',
                'email' => 'jp@hotmail.com',
                'dni' => '2790999087',
                'sexo' => 'femenino',
                'dob' => '19770-01-05',
                'address' => 'Larrea 2234',
                'prospecto' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Carlos',
                'last_name' => 'Juarez',
                'email' => 'cj@hotmail.com',
                'dni' => '279092887',
                'sexo' => 'masculino',
                'dob' => '1988-15-06',
                'address' => 'Av. San Juan 1980',
                'prospecto' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Enrique',
                'last_name' => 'Sanchez',
                'email' => 'es@gmail.com',
                'dni' => '279092587',
                'sexo' => 'masculino',
                'dob' => '1970-09-22',
                'address' => 'Av. San Pedrito 190',
                'prospecto' => 1,
            ]

        ]);
    }
}
