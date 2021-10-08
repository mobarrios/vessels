
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

        //configuracion
        $this->call(UserTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionsRolesTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);

        $this->call(IvaConditionsSeeders::class);
        $this->call(CompanySeeders::class);


        //branches
        $this->call(BranchSeeders::class);

        //brancheables
        $this->call(BrancheablesSeeders::class);



        //testing

       // $this->call(BrandsSeeders::class);
       // $this->call(CategoriesSeeders::class);
       // $this->call(ColorsSeeders::class);
       // $this->call(ModelsPruebaSeeders::class);
       // $this->call(SizesSeeders::class);
        


        Model::reguard();
    }
}
