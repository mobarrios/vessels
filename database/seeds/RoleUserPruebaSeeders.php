<?php

use Illuminate\Database\Seeder;

class RoleUserPruebaSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 5; $i < 50; $i++){

            DB::table('role_user')->insert([
                "id" => $i,
                "role_id" => 1,
                "user_id" => $i
            ]);

        }
    }
}
