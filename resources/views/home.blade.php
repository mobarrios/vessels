@extends('template')

@section('sectionContent')
        {{--
                <div class="row">

         <div class="col-sm-3 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-red-active">
                <div class="inner">
                    <h3>{{\App\Entities\Tecnica\Orders::all()->count()}}</h3>
                    <p>Ordenes</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{route('admin.orders.create')}}" class="small-box-footer">Nueva Orden <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        --}}

        {{--
        <!-- Default box -->
        <div class="col-xs-12 col-sm-3 pull-right">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="{!! Auth::user()->images ? Auth::user()->images->path : "vendors/LTE/dist/img/avatar5.png"!!}" alt="User profile picture">

                    <h3 class="profile-username text-center"><a href="{!! route('admin.profiles.index') !!}">{{\Illuminate\Support\Facades\Auth::user()->fullName}}</a></h3>

                    <p class="text-center ">
                        <span class="text-muted">Perfil : </span>

                    @foreach(\Illuminate\Support\Facades\Auth::user()->Roles as $rol)
                            <label class=" label label-primary"> {{$rol->slug}}</label>
                        @endforeach
                    </p>
                    <span >
                        <span class="text-muted">Sucursales : </span>
                      @foreach(\Illuminate\Support\Facades\Auth::user()->brancheables as $branch)
                        <label class=" label label-default">{{$branch->branches->name}}</label>
                      @endforeach
                    </span>

                </div>

            </div>
        </div>
        <div class="col-sm-3 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{\App\Entities\Admin\Budgets::all()->count()}}</h3>
                    <p>Presupuestos</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-bookmark"></i>
                </div>
            </div>
            <div class="box-footer">
                {!! Form::open(['route'=>('admin.budgets.index'),'method'=>'GET']) !!}
                    <div class="input-group">
                        <input name="search" placeholder="Buscar Presupuesto..." class="form-control" type="text">
                        <input  type="hidden" name="filter[]" value="id">
                          <span class="input-group-btn">
                            <button type="submit" class="btn bg-aqua btn-flat"><span class="fa fa-search"></span></button>
                          </span>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
        --}}


        {{--

      <div class="col-sm-3 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-orange ">
                <div class="inner">
                    <h3>{{\App\Entities\Admin\Models::all()->count()}}</h3>
                    <p>Lista de Precios</p>
                </div>
                <div class="icon">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="{{route('admin.models.index')}}" class="small-box-footer">ir a Lista  <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        --}}

    <div class="row">

        {{-- <div class="col-sm-2 ">
            <div class="box no-border">
                <div class="box-body">
                    <a href="{{route('admin.orders.create')}}" class="btn btn-app ">
                        <i class="fa fa-wrench"></i>
                        Nueva Orden
                    </a>
                    <a href="{{route('admin.clients.create')}}" class="btn btn-app">
                        <i class="fa fa-group"></i>
                        Nuevo Cliente
                    </a>
                </div>
                <!-- /.box-body -->
            </div>
        </div> --}}

        {{-- <div class="col-md-3">
            <div class="small-box bg-aqua">
            <div class="inner"> --}}
            {{-- <h3>{{$orders_iniciadas->count()}}</h3> --}}
            {{-- <h3>0</h3>

            <p>Ordenes Iniciadas</p>
            </div>
            <div class="icon">
                <i class="ion ion-wrench"></i>
            </div>
            </div>
        </div>

        <div class="col-md-3">
                <div class="small-box bg-red">
                <div class="inner"> --}}
                {{-- <h3>{{$orders_cerradas->count()}}</h3> --}}
                {{-- <h3>0</h3>
                <p>Ordenes Entregadas</p>

                </div>
                <div class="icon">
                <i class="ion ion-wrench"></i>
                </div>
                </div>
            </div> --}}



        {{-- <div class="col-sm-12 col-xs-12">
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Mis de Ordenes</h3>
                </div> --}}
                <!-- /.box-header -->
                {{-- <div class="box-body">
                    <div class="table-responsive">
                          <table class="table table-striped" id="dataTableHome">
                            <thead>
                              <th>Codigo Orden</th>
                              <th>Cliente</th>
                              <th>Modelo</th>
                              <th>Observ. Int.</th>
                              <th>Estado Actual</th>
                              <th>Ultima Act.</th>
                              <th></th>
                            </thead>
                            <tbody>
                            @foreach($models as $model)
                                <tr>
                                   <td>#{{$model->id }}</td>
                                   <td>{{ isset($model->Cliente->fullname) ? $model->Cliente->fullname : '' }}</td>
                                   <td>{{ isset($model->Model->name) ? $model->Model->name : '' }}</td>
                                   <td>{{$model->observaciones_internas}}</td>
                                   <td>
                                        <span class="label" style="background-color:{{ isset($model->lasTOrdenEstados()->States->color) ? $model->lasTOrdenEstados()->States->color : '' }} ">
                                             {{ isset($model->lasTOrdenEstados()->States->description) ? $model->lasTOrdenEstados()->States->description : '' }}
                                        </span>
                                    </td>
                                    <td><small>{{$model->updated_at}}</small></td>

                                    <td><a href="{{route('admin.orders.details', $model->id)}}" class="btn btn-xs btn-success" ><span class="fa fa-info-circle"></span> </a></td>
                                </tr>
                            @endforeach
                            </tbody>
                          </table>
                    </div>

                </div> --}}
                <!-- /.box-body -->
          {{-- </div>
        </div> --}}

        {{-- <div class="col-sm-12">
        <iframe src="http://coders.com.ar:3000/public/dashboard/dbb92d9a-82a3-44a0-b649-1b7b7ec86bcb" frameborder="0"  width="100%"  height="600" allowtransparency>

        </iframe>

        </div> --}}
    </div>
@endsection
{{-- @section('js')
<script type="text/javascript">
    $('#dataTableHome').dataTable({
        "ordering": false
    });
</script>
@endsection --}}
