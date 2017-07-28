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

            {{--@permission('clients.list|budgets.list')--}}
            {{--<li class="treeview {{ in_array(Request::segment(2), ["clients","prospectos","budgets"]) ? 'active' : ''  }}">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-group "></i> <span>Clientes</span>--}}
                    {{--<span class="pull-right-container">--}}
                      {{--<i class="fa fa-angle-left pull-right"></i>--}}
                  {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--@permission('clients.list')--}}
                         {{--<li class={{ Request::segment(2) == "clients" ? 'active' : '' }}><a--}}
                                {{--href="{{route('moto.clients.index')}}"><span>Lista de Clientes</span></a></li>--}}
                    {{--<li class={{ Request::segment(2) == "prospectos" ? 'active' : '' }}><a--}}
                                {{--href="{{route('moto.prospectos.index')}}"><span>Lista de Prospectos</span></a></li>--}}
                    {{--@endpermission--}}
                    {{--@permission('budgets.list')--}}
                    {{--<li class={{ Request::segment(2) == "budgets" ? 'active' : '' }}><a--}}
                                {{--href="{{route('moto.budgets.create')}}"><span>Nuevo Presupuesto</span></a></li>--}}
                    {{--@endpermission--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--@endpermission--}}

            {{--@permission('technicalServices.list|services.list')--}}
            {{--<li class="treeview {{ in_array(Request::segment(2), ["technicalServices","services"]) ? 'active' : ''  }}">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-wrench "></i> <span>Servicio Técnico</span>--}}
                    {{--<span class="pull-right-container">--}}
                      {{--<i class="fa fa-angle-left pull-right"></i>--}}
                  {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--@permission('technicalServices.list')--}}
                    {{--<li class={{ Request::segment(2) == "technicalServices" ? 'active' : '' }}><a--}}
                                {{--href="{{route('moto.technicalServices.index')}}"><span>Ordenes de Servicio</span></a></li>--}}
                    {{--@endpermission--}}
                    {{--@permission('services.list')--}}
                    {{--<li class={{ Request::segment(2) == "services" ? 'active' : '' }}><a--}}
                                {{--href="{{route('moto.services.index')}}"><span>Servicios</span></a></li>--}}
                    {{--@endpermission--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--@endpermission--}}



            {{--@permission('items.list|modelslistsprices.list|brands.list|categories.list|models.list|colors.list')--}}
            {{--<li class="treeview {{ in_array(Request::segment(2), ["items","modelsListsPrices","brands","categories","models","colors"]) ? 'active' : '' }}">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-motorcycle "></i> <span>Articulos</span>--}}
                {{--<span class="pull-right-container">--}}
                  {{--<i class="fa fa-angle-left pull-right"></i>--}}
              {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}

                    {{--@permission('items.list')--}}
                    {{--<li class={{ Request::segment(2) == "items" && Request::segment(4) == 1 ? 'active' : '' }}><a--}}
                                {{--href="{{route('moto.items.index', 1)}}"><span>Motos</span></a></li>--}}
                    {{--<li class={{ Request::segment(2) == "items" && Request::segment(4) == 2 ? 'active' : '' }}><a--}}
                                {{--href="{{route('moto.items.index', 2)}}"><span>Accesorios</span></a></li>--}}
                    {{--<li class={{ Request::segment(2) == "items" && Request::segment(4) == 2 ? 'active' : '' }}><a--}}
                                {{--href="{{route('moto.items.index', 3)}}"><span>Repuestos</span></a></li>--}}

                    {{--@endpermission--}}
                    {{--@permission('modelslistsprices.list')--}}
                    {{--<li class={{ Request::segment(2) == "modelsListsPrices" ? 'active' : '' }}><a--}}
                                {{--href="{{route('moto.modelsListsPrices.index')}}"><span> Listas de Precios </span></a>--}}
                    {{--</li>--}}
                    {{--@endpermission--}}
                    {{--@permission('brands.list')--}}
                    {{--<li class={{ Request::segment(2) == "brands" ? 'active' : '' }}><a--}}
                                {{--href="{{route('moto.brands.index')}}"><span> Marcas</span></a></li>--}}
                    {{--@endpermission--}}
                    {{--@permission('categories.list')--}}
                    {{--<li class={{ Request::segment(2) == "categories" ? 'active' : '' }}><a--}}
                                {{--href="{{route('moto.categories.index')}}"><span> Categorias</span></a></li>--}}
                    {{--@endpermission--}}
                    {{--@permission('models.list')--}}
                    {{--<li class={{ Request::segment(2) == "models" ? 'active' : '' }}><a--}}
                                {{--href="{{route('moto.models.index')}}"><span> Modelos</span></a></li>--}}
                    {{--@endpermission--}}
                    {{--@permission('colors.list')--}}
                    {{--<li class={{ Request::segment(2) == "colors" ? 'active' : '' }}><a--}}
                                {{--href="{{route('moto.colors.index')}}"><span> Colores</span></a></li>--}}
                    {{--@endpermission--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--@endpermission--}}

            {{--@permission('providers.list|modelslistsprices.list|purchasesorders.list|dispatches.list')--}}
            {{--<li class="treeview {{ in_array(Request::segment(2), ["providers","purchasesListsPrices","purchasesOrders","purchasesOrders","dispatches"]) ? 'active' : '' }}">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-industry "></i> <span>Compras</span>--}}
            {{--<span class="pull-right-container">--}}
              {{--<i class="fa fa-angle-left pull-right"></i>--}}
          {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--@permission('providers.list')--}}
                    {{--<li class={{ Request::segment(2) == "providers" ? 'active' : '' }}><a--}}
                                {{--href="{{route('moto.providers.index')}}"><span> Proveedores</span></a></li>--}}
                    {{--@endpermission--}}
                    {{----}}
                    {{--@permission('modelslistsprices.list')--}}
                    {{--<li class={{ Request::segment(2) == "purchasesListsPrices" ? 'active' : '' }}><a--}}
                                {{--href="{{route('moto.purchasesListsPrices.index')}}"><span> Listas de Precios Compra</span></a>--}}
                    {{--</li>--}}
                    {{--@endpermission--}}
                    {{----}}
                    {{--@permission('purchasesorders.list')--}}
                    {{--<li class={{ Request::segment(2) == "purchasesOrders" ? 'active' : '' }}><a--}}
                                {{--href="{{route('moto.purchasesOrders.index')}}"><span>Perdidos de Mercaderias</span></a>--}}
                    {{--</li>--}}
                    {{--@endpermission--}}
                    {{----}}
                    {{--@permission('purchasesorders.list')--}}
                    {{--<li class={{ Request::segment(2) == '' ? 'active' : '' }}><a href=""><span>Notas de Pedidos</span></a></li>--}}
                    {{--@endpermission--}}
                    {{----}}
                    {{--@permission('dispatches.list')--}}
                    {{--<li class={{ Request::segment(2) == "dispatches" ? 'active' : '' }}><a--}}
                                {{--href="{{route('moto.dispatches.index')}}"><span>Remitos</span></a></li>--}}
                    {{--@endpermission--}}

                {{--</ul>--}}
            {{--</li>--}}
            {{--@endpermission--}}

            {{--@permission('sales.list|vouchers.list')--}}
                {{--<li class="treeview {{ in_array(Request::segment(2), ["sales","vouchers"]) ? 'active' : '' }}">--}}
                    {{--<a href="#">--}}
                        {{--<i class="fa fa-shopping-cart "></i> <span>Ventas</span>--}}
                        {{--<span class="pull-right-container">--}}
                          {{--<i class="fa fa-angle-left pull-right"></i>--}}
                      {{--</span>--}}
                    {{--</a>--}}
                    {{--<ul class="treeview-menu">--}}
                        {{--@permission('sales.list')--}}
                        {{--<li class={{ Request::segment(2) == "sales" ? 'active' : '' }}><a--}}
                                    {{--href="{{route('moto.sales.index')}}"><span>Ventas</span></a></li>--}}
                        {{--@endpermission--}}

                        {{--@permission('vouchers.list')--}}
                        {{--<li class={{ Request::segment(2) == "vouchers" ? 'active' : '' }}><a--}}
                                    {{--href="{{route('configs.vouchers.index')}}"><span>Comprobantes</span></a></li>--}}
                        {{--@endpermission--}}

                    {{--</ul>--}}
                {{--</li>--}}
            {{--@endpermission--}}


            {{--@permission('smallboxes.list')--}}
            {{--<li class="treeview {{ in_array(Request::segment(2), ["smallBoxes"]) ? 'active' : '' }}">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-money"></i> <span>Caja</span>--}}
                        {{--<span class="pull-right-container">--}}
                          {{--<i class="fa fa-angle-left pull-right"></i>--}}
                      {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li class={{ Request::segment(3) == 1 ? 'active' : '' }}><a--}}
                                {{--href="{{route('moto.smallBoxes.index')}}"><span>Movimientos</span></a></li>--}}


                {{--</ul>--}}
            {{--</li>--}}
            {{--@endpermission--}}

            {{--@permission('itemsrequest.list|myrequest.list')--}}
                {{--<li class="treeview {{ in_array(Request::segment(2), ["itemsRequest","myRequest"]) ? 'active' : '' }}">--}}
                    {{--<a href="#">--}}
                        {{--<i class="fa fa-truck "></i> <span>Logística</span>--}}
                    {{--<span class="pull-right-container">--}}
                      {{--<i class="fa fa-angle-left pull-right"></i>--}}
                  {{--</span>--}}
                    {{--</a>--}}
                    {{--<ul class="treeview-menu">--}}
                        {{--@permission('itemsrequest.list')--}}
                        {{--<li class={{ Request::segment(2) == "itemsRequest" ? 'active' : '' }}><a--}}
                                    {{--href="{{route('moto.itemsRequest.index')}}"><span>Pedidos de Articulos</span> </a></li>--}}
                        {{--@endpermission--}}
                        {{--@permission('myrequest.list')--}}
                        {{--<li class={{ Request::segment(2) == "myRequest" ? 'active' : '' }}><a--}}
                                    {{--href="{{route('moto.myRequest.index')}}"><span>Mis Pedidos</span> </a></li>--}}
                        {{--@endpermission--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--@endpermission--}}

            {{--@permission('files.list|registros.list|forms.list')--}}
                {{--<li class="treeview {{ in_array(Request::segment(2), ["files","registros","forms"]) ? 'active' : '' }}">--}}
                    {{--<a href="#">--}}
                        {{--<i class="fa fa-book "></i> <span>Gestoría</span>--}}
                    {{--<span class="pull-right-container">--}}
                      {{--<i class="fa fa-angle-left pull-right"></i>--}}
                  {{--</span>--}}
                    {{--</a>--}}
                    {{--<ul class="treeview-menu">--}}
                        {{--@permission('files.list')--}}
                        {{--<li class={{ Request::segment(2) == "files" ? 'active' : '' }}><a--}}
                                    {{--href="{{route('moto.files.index')}}"><span>Legajos</span></a></li>--}}
                        {{--@endpermission--}}
                        {{--@permission('registros.list')--}}
                        {{--<li class={{ Request::segment(2) == "registros" ? 'active' : '' }}><a--}}
                                    {{--href="{{route('moto.registros.index')}}"><span>Registros</span></a></li>--}}
                        {{--@endpermission--}}
                        {{--@permission('forms.list')--}}
                        {{--<li class={{ Request::segment(2) == "forms" ? 'active' : '' }}><a--}}
                                    {{--href="{{route('moto.forms.index')}}"><span>Formularios</span></a></li>--}}
                        {{--@endpermission--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--@endpermission--}}

            @permission('roles.list|permissions.list|users.list|logs.list|additionals.list|company.list|branches.list|additionals.list')
                <li class="treeview {{ in_array(Request::segment(2), ["branches","roles","permissions","users","logs", "checkbooks","additionals","company"]) ? 'active' : '' }}">
                    <a href="#"><i class="fa fa-gear"></i> <span>Configuración</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                <ul class="treeview-menu">
                    <li class="{{ in_array(Request::segment(2), ["branches","additionals","company"]) ? 'active' : '' }}">
                        <a href="#"><span>Empresa</span>
                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                    <ul class="treeview-menu">
                    <li class="{{ Request::segment(2) == "company" ? 'active' : '' }}"><a
                    href="{{route('configs.company.index')}}"><span>Datos</span> </a></li>
                    <li class={{ Request::segment(2) == "branches" ? 'active' : '' }}><a
                    href="{{route('configs.branches.index')}}"><span> Sucursales</span></a></li>

                    {{--<li class={{ Request::segment(2) == "additionals" ? 'active' : '' }}><a--}}
                    {{--href="{{route('configs.additionals.index')}}"><span> Adicionales</span></a></li>--}}

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

                        {{--@permission('financials.list')--}}
                            {{--<li class={{ Request::segment(2) == "financials" ? 'active' : '' }}><a href="{{route('moto.financials.index')}}"><span>Financiamientos</span></a></li>--}}
                        {{--@endpermission--}}

                        {{--@permission('paymethods.list')--}}
                            {{--<li class={{ Request::segment(2) == "payMethods" ? 'active' : '' }}><a href="{{route('moto.payMethods.index')}}"><span>Metodos de Pago</span></a></li>--}}
                        {{--@endpermission--}}

                        {{--@permission('checkbooks.list')--}}
                            {{--<li class={{ Request::segment(2) == "checkbooks" ? 'active' : '' }}><a href="{{route('moto.checkbooks.index')}}"><span>Chequera</span></a></li>--}}
                        {{--@endpermission--}}


                    <li><a href="#"><span>Sistema</span></a></li>
                </ul>
                </li>
            @endpermission

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
