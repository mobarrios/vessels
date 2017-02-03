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

        //production
        $this->call(UserTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionsRolesTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(BranchSeeders::class);
        $this->call(BrancheablesSeeders::class);

        $this->call(ProvidersTableSeeder::class);
       // $this->call(UsersPruebaSeeders::class);
        //$this->call(RoleUserPruebaSeeders::class);

        //testing
        // $this->call(BranchPruebaSeeders::class);
        // $this->call(UsersPruebaSeeders::class);
        // $this->call(RoleUserPruebaSeeders::class);
        $this->call(BrandsSeeders::class);
        $this->call(CategoriesSeeders::class);
        $this->call(ColorsSeeders::class);
        $this->call(ModelsPruebaSeeders::class);
        $this->call(ClientsSeeders::class);
        $this->call(ItemsPruebaSeeders::class);
        $this->call(ModelsCategoriesPruebaSeeders::class);


        Model::reguard();
    }
}
