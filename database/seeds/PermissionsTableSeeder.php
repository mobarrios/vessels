<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'id'    => 1,
                'name' => 'List Users',
                'slug' => 'list.users',
                'model' => 'App\Configs\User',
            ],
            [
                'id'    => 2,
                'name' => 'Edit Users',
                'slug' => 'edit.users',
                'model' => 'App\Configs\User',
            ],
            [
                'id'    => 3,
                'name' => 'Store Users',
                'slug' => 'store.users',
                'model' => 'App\Configs\User',
            ],
            [
                'id'    => 4,
                'name' => 'Delete Users',
                'slug' => 'delete.users',
                'model' => 'App\Configs\User',
            ]
        ]);
    }
}
