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
        DB::table('branches')->insert([
        [
            'id'    => 1,
            'name'=>'Casa Central',
        ],[
            'id'    => 2,
            'name'=>'Logistica',
        ],[
            'id'    => 3,
            'name'=>'San Miguel',
        ],[
            'id'    => 4,
            'name'=>'Morón',
        ]]
        );
    }
}
