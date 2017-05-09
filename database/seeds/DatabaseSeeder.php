
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

        $this->call(PayMethodsTableSeeder::class);

        //testing
        $this->call(BrandsSeeders::class);
        $this->call(CategoriesSeeders::class);
        $this->call(ColorsSeeders::class);
        $this->call(ModelsPruebaSeeders::class);
        $this->call(SizesSeeders::class);


        //$this->call(ClientsSeeders::class);
        $this->call(ModelsCategoriesPruebaSeeders::class);
        $this->call(ModelsProvidersPruebaSeeders::class);


        //$this->call(ItemsPruebaSeeders::class);
        //$this->call(ModelsListsPricesPruebaSeeders::class);
        //$this->call(ModelsListsPricesItemsPruebaSeeders::class);
        $this->call(TypesSmallBoxesPruebaSeeders::class);

        $this->call(BanksTableSeeder::class);
        $this->call(AdditionalsTableSeeder::class);
        $this->call(CompanySeeders::class);
        $this->call(IvaConditionsSeeders::class);






        Model::reguard();
    }
}
