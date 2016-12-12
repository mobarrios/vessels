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


        DB::table('providers')->insert([
                [
                    'id'    => 1,
                    'name'=>'Honda Argentina',
                    'address'=>'San Juan 255',
                    'cuit'=> 123133322,
                    'email'=> 'ventas@hondaargetina.com.ar',
                ],[
                    'id'    => 2,
                    'name'=>'Yamaha Argentina',
                    'address'=>'AV. Cerrito 2245',
                    'cuit'=> 12313333322,
                    'email'=> 'ventas@yamahaargentina.com.ar',
                ]]
        );

        /*
        $faker = Faker\Factory::create();

        for($i = 1; $i < 5; $i++){

            DB::table('providers')->insert([
                "id" => $i,
                "name" => $faker->company(),
                "address" => $faker->address(),
                "cuit" => $faker->biasedNumberBetween(20,28).'-'.$faker->randomNumber(8).'-'.$faker->randomNumber(1),
                "email" => $faker->email(),
                "phone" => $faker->phoneNumber()
            ]);

        }
        */
    }
}
