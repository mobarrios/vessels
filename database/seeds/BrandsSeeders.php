<?php

use Illuminate\Database\Seeder;

class BrandsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
        [
            'id'    => 1,
            'name'=>'Honda',
        ],[
            'id'    => 2,
            'name'=>'Yamaha',
        ]]
        );
    }
}
