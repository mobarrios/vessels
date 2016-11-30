<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MENU PRINCIPAL</li>

            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a href="{{route('home')}}">
                    <i class="fa fa-home"></i> <span>Home </span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">1</small>
                     </span>
                </a>
            </li>

            @permission('clients.list')
                <li class="treeview {{ Request::segment(2) == "clients" ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-group "></i> <span>Clientes</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('moto.clients.index')}}"><span>Lista de Clientes</span></a></li>
                    </ul>
                </li>
            @endpermission

            <li class="treeview {{ in_array(Request::segment(2), ["items","modelsListsPrices","brands","categories","models","colors"]) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-motorcycle "></i> <span>Articulos</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    @permission('items.list')
                        <li class={{ Request::segment(2) == "items" ? 'active' : '' }}><a href="{{route('moto.items.index')}}"><span>Artiulos</span></a></li>
                    @endpermission
                    @permission('modelslistsprices.list')
                        <li class={{ Request::segment(2) == "modelsListsPrices" ? 'active' : '' }}><a href="{{route('moto.modelsListsPrices.index')}}"><span> Listas de Precios </span></a></li>
                    @endpermission
                    @permission('brands.list')
                        <li class={{ Request::segment(2) == "brands" ? 'active' : '' }}><a href="{{route('moto.brands.index')}}"><span> Marcas</span></a></li>
                    @endpermission
                    @permission('categories.list')
                        <li class={{ Request::segment(2) == "categories" ? 'active' : '' }}><a href="{{route('moto.categories.index')}}"><span> Categorias</span></a></li>
                    @endpermission
                    @permission('models.list')
                        <li class={{ Request::segment(2) == "models" ? 'active' : '' }}><a href="{{route('moto.models.index')}}"><span> Modelos</span></a></li>
                    @endpermission
                    @permission('colors.list')
                        <li class={{ Request::segment(2) == "colors" ? 'active' : '' }}><a href="{{route('moto.colors.index')}}"><span> Colores</span></a></li>
                    @endpermission
                </ul>
            </li>

            <li class="treeview {{ in_array(Request::segment(2), ["providers","purchasesListsPrices","purchasesOrders","purchasesOrders","dispatches"]) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-shopping-bag "></i> <span>Compras</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    @permission('providers.list')
                        <li class={{ Request::segment(2) == "providers" ? 'active' : '' }}><a href="{{route('moto.providers.index')}}"><span> Proveedores</span></a></li>
                    @endpermission
                    @permission('modelslistsprices.list')
                        <li class={{ Request::segment(2) == "purchasesListsPrices" ? 'active' : '' }}><a href="{{route('moto.purchasesListsPrices.index')}}"><span> Listas de Precios Compra</span></a></li>
                    @endpermission
                    @permission('purchasesorders.list')
                        <li class={{ Request::segment(2) == "purchasesOrders" ? 'active' : '' }}><a href="{{route('moto.purchasesOrders.index')}}"><span>Perdidos de Mercaderias</span></a></li>
                    @endpermission
                    @permission('purchasesorders.list')
                        <li class={{ Request::segment(2) == "purchasesOrders" ? 'active' : '' }}><a href="{{route('moto.purchasesOrders.index')}}"><span>Notas de Pedidos</span></a></li>
                    @endpermission
                    @permission('dispatches.list')
                        <li class={{ Request::segment(2) == "dispatches" ? 'active' : '' }}><a href="{{route('moto.dispatches.index')}}"><span>Remitos</span></a></li>
                    @endpermission

                </ul>
            </li>

            <li class="treeview {{ in_array(Request::segment(2), ["branches","roles","permissions","users","logs"]) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-gear"></i> <span>Configuración</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::segment(2) == "branches" ? 'active' : '' }}">
                        <a href="#"><span>Empresa</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><span>Datos</span> </a></li>
                            <li class={{ Request::segment(2) == "branches" ? 'active' : '' }}><a href="{{route('configs.branches.index')}}"><span> Sucursales</span></a></li>

                        </ul>
                    </li>
                    <li class="{{ (Request::segment(2) == "roles" || Request::segment(2) == "permissions" || Request::segment(2) == "users")  ? 'active' : '' }}">
                        <a href="#"><span> Accesos </span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            @permission('roles.list')
                                <li class={{ Request::segment(2) == "roles" ? 'active' : '' }}><a href="{{route('configs.roles.index')}}"><span>Roles</span> </a></li>
                            @endpermission
                            @permission('permissions.list')
                                <li class={{ Request::segment(2) == "permissions" ? 'active' : '' }}><a href="{{route('configs.permissions.index')}}"><span> Permisos</span> </a></li>
                            @endpermission
                            @permission('users.list')
                                <li class={{ Request::segment(2) == "users" ? 'active' : '' }}><a href="{{route("configs.users.index")}}"><span> Usuarios</span> </a></li>
                            @endpermission

                        </ul>
                    </li>
                    @permission('logs.list')
                        <li class={{ Request::segment(2) == "logs" ? 'active' : '' }}><a href="{{route('configs.logs.index')}}"><span>Logs</span></a></li>
                    @endpermission

                    <li><a href="#"><span>Sistema</span></a></li>
                </ul>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
