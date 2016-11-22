<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         $this->call(UserTableSeeder::class);
//         $this->call(UsersPruebaSeeders::class);
         $this->call(RoleTableSeeder::class);
         $this->call(PermissionsTableSeeder::class);
         $this->call(PermissionsRolesTableSeeder::class);
         $this->call(RoleUserTableSeeder::class);
//         $this->call(RoleUserPruebaSeeders::class);
        $this->call(BranchSeeders::class);
//        $this->call(BranchPruebaSeeders::class);
        //$this->call(ProvidersTableSeeder::class);

        Model::reguard();
    }
}
