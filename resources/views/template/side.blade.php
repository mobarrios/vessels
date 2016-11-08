<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MENU PRINCIPAL</li>
            <li class="active">
                <a href="{{route('home')}}">
                    <i class="fa fa-home"></i> <span>HOME</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">1</small>
                     </span>
                </a>
            </li>

            @permission('list.configs')
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-gear"></i> <span>Configuración</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
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
                        <li>
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
            @endpermission



        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
