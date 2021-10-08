<?php

use Illuminate\Database\Seeder;

class BranchSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'Suc. 1',
                    'company_id' => 1,
                    'punto_venta' => '001',
                    'address'=> 'AV.1123, San Miguel',
                ]
                
            ]
        );
    }
}
