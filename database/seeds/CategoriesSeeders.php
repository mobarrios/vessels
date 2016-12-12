<?php

use Illuminate\Database\Seeder;

class CategoriesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        [
            'id'    => 1,
            'name'=>'Motos',
        ],[
            'id'    => 2,
            'name'=>'Scooters',
        ],
                [
                    'id'    => 3,
                    'name'=>'Custom',
                ]
            ]
        );
    }
}
