<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MENU PRINCIPAL</li>
            <li>
                <a href="{{route('home')}}">
                    <i class="fa fa-home"></i> <span>HOME</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">1</small>
                     </span>
                </a>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gear"></i> <span>Configuración</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#"><i class="fa fa-caret-right"></i> Empresa
                        <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-caret-right"></i> Datos</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Sucursales</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-caret-right"></i> Accesos
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-caret-right"></i> Roles</a></li>
                            <li><a href="{{route('configs.permissions.index')}}"><i class="fa fa-caret-right"></i> Permisos</a></li>

                            @permission('list.users')
                                <li><a href="{{route("configs.users.index")}}"><i class="fa fa-caret-right"></i> Usuarios</a></li>
                            @endpermission

                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-caret-right"></i>Sistema</a></li>
                </ul>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
