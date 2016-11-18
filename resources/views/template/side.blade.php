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

            <li class="treeview {{ Request::segment(1) == "moto" ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-motorcycle "></i> <span>Articulos</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('moto.items.index')}}"><span>Artiulos</span></a></li>
                    <li><a href="{{route('moto.brands.index')}}"><span> Marcas</span></a></li>
                    <li><a href="{{route('moto.categories.index')}}"><span> Categorias</span></a></li>
                    <li><a href="{{route('moto.models.index')}}"><span> Modelos</span></a></li>
                    <li><a href="{{route('moto.colors.index')}}"><span> Colores</span></a></li>
                    <li><a href="{{route('moto.providers.index')}}"><span> Proveedores</span></a></li>
                    <li><a href="{{route('moto.modelsListsPrices.index')}}"><span> Listas de Precios</span></a></li>


                </ul>
            </li>

            @permission('configs.list')
            @endpermission

            <li class="treeview {{ Request::segment(1) == "configs" ? 'active' : '' }}">
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
                            <li><a href="{{route('configs.branches.index')}}"><span> Sucursales</span></a></li>

                        </ul>
                    </li>
                    <li class="{{ (Request::segment(2) == "roles" || Request::segment(2) == "permissions" || Request::segment(2) == "users")  ? 'active' : '' }}">
                        <a href="#"><span> Accesos </span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('configs.roles.index')}}"><span>Roles</span> </a></li>
                            <li><a href="{{route('configs.permissions.index')}}"><span> Permisos</span> </a></li>
                            <li><a href="{{route("configs.users.index")}}"><span> Usuarios</span> </a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('configs.logs.index')}}"><span>Logs</span></a></li>
                    <li><a href="#"><span>Sistema</span></a></li>
                </ul>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
