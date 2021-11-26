<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Main Menu</li>

            <li>
                <a class="menu" href="{{route('home')}}">
                    <i class="fa fa-home"></i><span>Home</span>
                </a>
            </li>

            {{-- @permission('clients.list|budgets.list')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-group " ></i>
                    <span>Clientes</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                    @permission('clients.list') --}}
                         {{-- <li><a href="{{route('admin.clients.index')}}" class="menu"><span>Lista de Clientes</span></a></li> --}}
                    {{--<li class={{ Request::segment(2) == "prospectos" ? 'active' : '' }}><a--}}
                                {{--href="{{route('admin.prospectos.index')}}"><span>Lista de Prospectos</span></a></li>--}}
                    {{-- @endpermission
                </ul>
            </li>
            @endpermission --}}


            {{-- @permission('items.list|modelslistsprices.list|additionals.list | brands.list | categories.list | models.list | colors.list | additionals.list')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-briefcase "></i> <span>Articulos</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu"> --}}
                    {{--
                    @permission('items.list')
                    <li class={{ Request::segment(2) == "items" ? 'active' : '' }}><a
                                href="{{route('admin.items.index')}}"><span>Stock</span></a></li>
                    @endpermission
                    @permission('modelslistsprices.list')
                    <li class={{ Request::segment(2) == "modelsListsPrices" ? 'active' : '' }}><a
                                href="{{route('admin.modelsListsPrices.index')}}"><span> Listas de Precios </span></a>
                    </li>
                    @endpermission
                    --}}

                    {{-- @permission('additionals.list | brands.list | categories.list | models.list | colors.list | additionals.list')
                    <li class="treeview">
                        <a href="#">
                            <span>Definiciones</span>
                            <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                        </a>
                        <ul class="treeview-menu">
                            @permission('categories.list')
                            <li><a href="{{route('admin.categories.index')}}" class="menu"><span> Categorias</span></a></li>
                            @endpermission
                            @permission('brands.list')
                            <li><a
                                        href="{{route('admin.brands.index')}}" class="menu"><span> Marcas</span></a></li>
                            @endpermission
                            @permission('models.list')
                            <li><a
                                        href="{{route('admin.models.index')}}" class="menu"><span> Modelos</span></a></li>
                            @endpermission --}}
                            {{--@permission('colors.list')--}}
                            {{--<li class={{ Request::segment(2) == "colors" ? 'active' : '' }}><a--}}
                            {{--href="{{route('admin.colors.index')}}"><span> Colores</span></a></li>--}}
                            {{--@endpermission--}}
                            {{--@permission('additionals.list')--}}
                            {{--<li class={{ Request::segment(2) == "additionals" ? 'active' : '' }}><a--}}
                            {{--href="{{route('configs.additionals.index')}}"><span> Adicionales</span></a></li>--}}
                            {{--@endpermission--}}
                        {{-- </ul>
                    </li>
                    @endpermission

                </ul>
            </li>
            @endpermission --}}

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-ship "></i> <span>Vessels</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                <li><a href="{{ route('vessels.vessels.index') }}" class="menu"><span>Vessels</span></a></li>
                <li><a href="{{ route('vessels.vesselsTypes.index') }}" class="menu"><span>Vessels Types</span></a></li>
                <li><a href="{{ route('vessels.cargoTypes.index') }}" class="menu"><span>Cargo Types</span></a></li>
                <li><a href="{{ route('vessels.sectorsTypes.index') }}" class="menu"><span>Sectors Types</span></a></li>

                <li><a href="{{ route('vessels.operationsTypes.index') }}" class="menu"><span>Operations Types</span></a></li>
                <li><a href="{{ route('vessels.locations.index') }}" class="menu"><span>Locations</span></a></li>

                {{-- <li><a href="{{ route('vessels.sectors.index') }}" class="menu"><span>Sectors</span></a></li> --}}
                <li><a href="{{ route('vessels.services.index') }}" class="menu"><span>Services</span></a></li>
                <li><a href="{{ route('vessels.departureReport.index') }}" class="menu"><span>Departure Report</span></a></li>
                <li><a href="{{ route('vessels.dmReport.index') }}" class="menu"><span>Daily Midnight Report</span></a></li>
                <li><a href="{{ route('vessels.surfersReport.index') }}" class="menu"><span>Surfers Activity Report</span></a></li>

                {{-- <li><a href="{{route('admin.purcharses.index' )}}" class="menu"><span>Ordenes Compra</span></a></li>
                <li><a href="{{route('admin.items.index' )}}" class="menu"><span>Ventas</span></a></li> --}}

                </ul>


            </li>

            {{-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-wrench "></i> <span>Swoptech</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                <li><a href="{{route('admin.productos.index' )}}" class="menu"><span>Productos</span></a></li>
                <li><a href="{{route('admin.caracteristicas.index' )}}" class="menu"><span>Caracteristicas</span></a></li>
                <li><a href="{{route('admin.presupuestos.index' )}}" class="menu"><span>Presupuestos</span></a></li>


                </ul>


            </li> --}}

            {{--
            @permission('smallboxes.list')
            <li class="treeview {{ in_array(Request::segment(2), ["smallBoxes"]) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-money"></i> <span>Caja</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                </a>
                <ul class="treeview-menu">
                    <li class={{ Request::segment(3) == 1 ? 'active' : '' }}><a
                                href="{{route('admin.smallBoxes.index')}}"><span>Movimientos</span></a></li>
                </ul>
            </li>
            @endpermission
            --}}


            @permission('roles.list|permissions.list|users.list|logs.list|additionals.list|company.list|branches.list|additionals.list')
                <li class="treeview">
                    <a href="#"><i class="fa fa-gear"></i> <span>Settings</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#"><span>Company</span>
                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>

                    <ul class="treeview-menu">
                     <li><a href="{{route('configs.company.index')}}" class="menu"><span>Data</span> </a></li>
                    {{-- <li><a href="{{route('configs.branches.index')}}" class="menu"><span> Sucursales</span></a></li> --}}
                    </ul>
                    </li>
                    <li><a href="#"><span> Access </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                        <ul class="treeview-menu">
                        @permission('roles.list')
                            <li><a href="{{route('configs.roles.index')}}" class="menu"><span>Roles</span> </a></li>
                        @endpermission
                        @permission('permissions.list')
                            <li><a href="{{route('configs.permissions.index')}}" class="menu"><span> Permissions</span> </a></li>
                        @endpermission
                        @permission('users.list')
                            <li ><a href="{{route("configs.users.index")}}" class="menu"><span> Users</span> </a></li>
                        @endpermission
                        </ul>
                    </li>
                        {{-- <li ><a href="{{route('admin.states.index')}}" class="menu"><span>Estados</span></a></li> --}}

                         {{-- <li ><a href="{{route('admin.services.index')}}" class="menu"><span>Servicios</span></a></li> --}}

                        {{-- <li ><a href="{{route('admin.equipments.index')}}" class="menu"><span>Equipos</span></a></li> --}}
                        @permission('logs.list')
                        <li ><a href="{{route('configs.logs.index')}}" class="menu"><span>Logs</span></a></li>
                        @endpermission
                         {{-- <li ><a href="{{route('admin.print.index')}}" class="menu"><span>Impresión</span></a></li> --}}

                        {{--
                        @permission('financials.list')
                            <li class={{ Request::segment(2) == "financials" ? 'active' : '' }}><a href="{{route('admin.financials.index')}}"><span>Financiamientos</span></a></li>
                        @endpermission
                        --}}
                        {{--
                        @permission('paymethods.list')
                            <li class={{ Request::segment(2) == "payMethods" ? 'active' : '' }}><a href="{{route('admin.payMethods.index')}}"><span>Metodos de Pago</span></a></li>
                        @endpermission
                        --}}
                        {{--
                        @permission('checkbooks.list')
                            <li class={{ Request::segment(2) == "checkbooks" ? 'active' : '' }}><a href="{{route('admin.checkbooks.index')}}"><span>Chequera</span></a></li>
                        @endpermission
                        --}}
                </ul>
                </li>
            @endpermission

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
