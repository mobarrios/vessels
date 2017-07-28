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
        DB::table('permissions')->insert(
            [
                //USERS
            [
                'id'    => 1,
                'name' => 'List Users',
                'slug' => 'users.list',
                'model' => 'App\Configs\User',
            ],
            [
                'id'    => 2,
                'name' => 'Crear Users',
                'slug' => 'users.create',
                'model' => 'App\Configs\User',
            ],
            [
                'id'    => 3,
                'name' => 'Edit Users',
                'slug' => 'users.edit',
                'model' => 'App\Configs\User',
            ],
            [
                'id'    => 4,
                'name' => 'Delete Users',
                'slug' => 'users.destroy',
                'model' => 'App\Configs\User',
            ],
            [
                'id'    => 5,
                'name' => 'Show Users',
                'slug' => 'users.show',
                'model' => 'App\Configs\User',
            ],
                //ROLES
            [
                'id'    => 6,
                'name' => 'List Roles',
                'slug' => 'roles.list',
                'model' => '',

            ],
            [
                'id'    => 7,
                'name' => 'Crear Roles',
                'slug' => 'roles.create',
                'model' => '',

            ],
            [
                'id'    => 8,
                'name' => 'Edit Roles',
                'slug' => 'roles.edit',
                'model' => '',

            ],
            [
                'id'    => 9,
                'name' => 'Delete Roles',
                'slug' => 'roles.destroy',
                'model' => '',

            ],
            [
                'id'    => 10,
                'name' => 'Show Roles',
                'slug' => 'roles.show',
                'model' => '',

            ],
                //PERMISSIONS
            [
                'id'    => 11,
                'name' => 'Permisos Roles',
                'slug' => 'permissions.list',
                'model' => '',

            ],
            [
                'id'    => 12,
                'name' => 'Permisos Roles',
                'slug' => 'permissions.create',
                'model' => '',

            ],
            [
                'id'    => 13,
                'name' => 'Permisos Roles',
                'slug' => 'permissions.edit',
                'model' => '',

            ],
            [
                'id'    => 14,
                'name' => 'Permisos Roles',
                'slug' => 'permissions.destroy',
                'model' => '',

            ],
            [
                'id'    => 15,
                'name' => 'Permisos Roles',
                'slug' => 'permissions.show',
                'model' => '',

            ],
                //LOGS
            [
                'id'    => 16,
                'name' => 'Logs List',
                'slug' => 'logs.list',
                'model' => '',

            ]


            ]);
    }
}
