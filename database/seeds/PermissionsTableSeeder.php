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

            ],
                //BRANDS
            [
                'id'    => 17,
                'name' => 'List Brands',
                'slug' => 'brands.list',
                'model' => '',
            ],
            [
                'id'    => 18,
                'name' => 'Crear Brands',
                'slug' => 'brands.create',
                'model' => '',
            ],
            [
                'id'    => 19,
                'name' => 'Edit Brands',
                'slug' => 'brands.edit',
                'model' => '',
            ],
            [
                'id'    => 20,
                'name' => 'Delete Brands',
                'slug' => 'brands.destroy',
                'model' => '',
            ],
            [
                'id'    => 21,
                'name' => 'Show Brands',
                'slug' => 'brands.show',
                'model' => '',
            ],
            //CATEGORIES
            [
                'id'    => 22,
                'name' => 'List Categories',
                'slug' => 'categories.list',
                'model' => '',
            ],
            [
                'id'    => 23,
                'name' => 'Crear Categories',
                'slug' => 'categories.create',
                'model' => '',
            ],
            [
                'id'    => 24,
                'name' => 'Edit Categories',
                'slug' => 'categories.edit',
                'model' => '',
            ],
            [
                'id'    => 25,
                'name' => 'Delete Categories',
                'slug' => 'categories.destroy',
                'model' => '',
            ],
            [
                'id'    => 26,
                'name' => 'Show Categories',
                'slug' => 'categories.show',
                'model' => '',
            ],
                //COLORS
            [
                'id'    => 27,
                'name' => 'List Colors',
                'slug' => 'colors.list',
                'model' => '',
            ],
            [
                'id'    => 28,
                'name' => 'Crear Colors',
                'slug' => 'colors.create',
                'model' => '',
            ],
            [
                'id'    => 29,
                'name' => 'Edit Colors',
                'slug' => 'colors.edit',
                'model' => '',
            ],
            [
                'id'    => 30,
                'name' => 'Delete Colors',
                'slug' => 'colors.destroy',
                'model' => '',
            ],
            [
                'id'    => 31,
                'name' => 'Show Colors',
                'slug' => 'colors.show',
                'model' => '',
            ],
                //ITEMS
                [
                    'id'    => 32,
                    'name' => 'List Items',
                    'slug' => 'items.list',
                    'model' => '',
                ],
                [
                    'id'    => 33,
                    'name' => 'Crear Items',
                    'slug' => 'items.create',
                    'model' => '',
                ],
                [
                    'id'    => 34,
                    'name' => 'Edit Items',
                    'slug' => 'items.edit',
                    'model' => '',
                ],
                [
                    'id'    => 35,
                    'name' => 'Delete Items',
                    'slug' => 'items.destroy',
                    'model' => '',
                ],
                [
                    'id'    => 36,
                    'name' => 'Show Items',
                    'slug' => 'items.show',
                    'model' => '',
                ],
                //MODELS
                [
                    'id'    => 37,
                    'name' => 'List Models',
                    'slug' => 'models.list',
                    'model' => '',
                ],
                [
                    'id'    => 38,
                    'name' => 'Crear Models',
                    'slug' => 'models.create',
                    'model' => '',
                ],
                [
                    'id'    => 39,
                    'name' => 'Edit Models',
                    'slug' => 'models.edit',
                    'model' => '',
                ],
                [
                    'id'    => 40,
                    'name' => 'Delete Models',
                    'slug' => 'models.destroy',
                    'model' => '',
                ],
                [
                    'id'    => 41,
                    'name' => 'Show Models',
                    'slug' => 'models.show',
                    'model' => '',
                ],
                //MODELSLISTPRICE
                [
                    'id'    => 42,
                    'name' => 'List Models Lists Prices',
                    'slug' => 'modelslistsprices.list',
                    'model' => '',
                ],
                [
                    'id'    => 43,
                    'name' => 'Crear Models Lists Prices',
                    'slug' => 'modelslistsprices.create',
                    'model' => '',
                ],
                [
                    'id'    => 44,
                    'name' => 'Edit Models Lists Prices',
                    'slug' => 'modelslistsprices.edit',
                    'model' => '',
                ],
                [
                    'id'    => 45,
                    'name' => 'Delete Models Lists Prices',
                    'slug' => 'modelslistsprices.destroy',
                    'model' => '',
                ],
                //CLIENTS
                [
                    'id'    => 46,
                    'name' => 'List Clients',
                    'slug' => 'clients.list',
                    'model' => '',
                ],
                [
                    'id'    => 47,
                    'name' => 'Crear Clients',
                    'slug' => 'clients.create',
                    'model' => '',
                ],
                [
                    'id'    => 48,
                    'name' => 'Edit Clients',
                    'slug' => 'clients.edit',
                    'model' => '',
                ],
                [
                    'id'    => 49,
                    'name' => 'Delete Clients',
                    'slug' => 'clients.destroy',
                    'model' => '',
                ],
                //PROVIDERS
                [
                    'id'    => 50,
                    'name' => 'List Poveedores',
                    'slug' => 'providers.list',
                    'model' => '',
                ],
                [
                    'id'    => 51,
                    'name' => 'Crear Poveedores',
                    'slug' => 'providers.create',
                    'model' => '',
                ],
                [
                    'id'    => 52,
                    'name' => 'Edit Poveedores',
                    'slug' => 'providers.edit',
                    'model' => '',
                ],
                [
                    'id'    => 53,
                    'name' => 'Delete Poveedores',
                    'slug' => 'providers.destroy',
                    'model' => '',
                ],
                //ORDENES DE COMPRA
                [
                    'id'    => 54,
                    'name' => 'List Ordenes de Compra',
                    'slug' => 'purchasesorders.list',
                    'model' => '',
                ],
                [
                    'id'    => 55,
                    'name' => 'Crear Ordenes de Compra',
                    'slug' => 'purchasesorders.create',
                    'model' => '',
                ],
                [
                    'id'    => 56,
                    'name' => 'Edit Ordenes de Compra',
                    'slug' => 'purchasesorders.edit',
                    'model' => '',
                ],
                [
                    'id'    => 57,
                    'name' => 'Delete Ordenes de Compra',
                    'slug' => 'purchasesorders.destroy',
                    'model' => '',
                ],
                //REMITOS
                [
                    'id'    => 58,
                    'name' => 'List Remitos',
                    'slug' => 'dispatches.list',
                    'model' => '',
                ],
                [
                    'id'    => 59,
                    'name' => 'Crear Remitos',
                    'slug' => 'dispatches.create',
                    'model' => '',
                ],
                [
                    'id'    => 60,
                    'name' => 'Edit Remitos',
                    'slug' => 'dispatches.edit',
                    'model' => '',
                ],
                [
                    'id'    => 61,
                    'name' => 'Delete Remitos',
                    'slug' => 'dispatches.destroy',
                    'model' => '',
                ],
                //LISTA DE PRECIO COMPRA
                [
                    'id'    => 62,
                    'name' => 'List Precio de Compra',
                    'slug' => 'purchaseslistsprices.list',
                    'model' => '',
                ],
                [
                    'id'    => 63,
                    'name' => 'Crear Precio de Compra',
                    'slug' => 'purchaseslistsprices.create',
                    'model' => '',
                ],
                [
                    'id'    => 64,
                    'name' => 'Edit Precio de Compra',
                    'slug' => 'purchaseslistsprices.edit',
                    'model' => '',
                ],
                [
                    'id'    => 65,
                    'name' => 'Delete Precio de Compra',
                    'slug' => 'purchaseslistsprices.destroy',
                    'model' => '',
                ],
                //PRESUPUESTOS
                [
                    'id'    => 66,
                    'name' => 'List Presupuestos',
                    'slug' => 'budgets.list',
                    'model' => '',
                ],
                [
                    'id'    => 67,
                    'name' => 'Crear Presupuestos',
                    'slug' => 'budgets.create',
                    'model' => '',
                ],
                [
                    'id'    => 68,
                    'name' => 'Edit Presupuestos',
                    'slug' => 'budgets.edit',
                    'model' => '',
                ],
                [
                    'id'    => 69,
                    'name' => 'Delete Presupuestos',
                    'slug' => 'budgets.destroy',
                    'model' => '',
                ],

                //FINANCIAMIENTOS
                [
                    'id'    => 70,
                    'name' => 'List Financiamientos',
                    'slug' => 'financials.list',
                    'model' => '',
                ],
                [
                    'id'    => 71,
                    'name' => 'Crear Financiamientos',
                    'slug' => 'financials.create',
                    'model' => '',
                ],
                [
                    'id'    => 72,
                    'name' => 'Edit Financiamientos',
                    'slug' => 'financials.edit',
                    'model' => '',
                ],
                [
                    'id'    => 73,
                    'name' => 'Delete Financiamientos',
                    'slug' => 'financials.destroy',
                    'model' => '',
                ],
                //orden de compra envio a proveedores
                [
                    'id'    => 74,
                    'name' => 'Enviar Ordenes de Compra',
                    'slug' => 'purchasesorders.sendtoproviders',
                    'model' => '',
                ],
        ]);
    }
}
