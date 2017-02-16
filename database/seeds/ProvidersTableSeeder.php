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
                    'name'=>'Honda Motor de Argentina S.A',
                    'address'=>'Ruta Provincial 6 l 195',
                    'cuit'=> 30577546777,
                    'email'=> 'ventas@hondaargetina.com.ar',
                ]
                ,[
                    'id'    => 2,
                    'name'=>'Yamaha Motor Argentina S.A',
                    'address'=>'Ruta 24 km 20200',
                    'cuit'=> 30687234754,
                    'email'=> 'ventas@yamahaargentina.com.ar',
                ],
                [
                    'id'    => 3,
                    'name'=>'Bajaj Auto Ltd',
                    'address'=>'Maipu 1210',
                    'cuit'=> 33712388779,
                    'email'=> 'ventas@bajaj.com.ar',
                ],
                [
                    'id'    => 4,
                    'name'=>'Zanella hnos y CIA S.A',
                    'address'=>'Juan Zanella 4437',
                    'cuit'=> 30502498572,
                    'email'=> 'ventas@zanella.com.ar',
                ],
                [
                    'id'    => 5,
                    'name'=>'Motomel S.A',
                    'address'=>'Av. A. Moreau de Justo 1848',
                    'cuit'=> 30661534164,
                    'email'=> 'ventas@motomel.com.ar',
                ],

            ]
        );

    }
}
