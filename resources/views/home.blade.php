@extends('template')

@section('sectionContent')
    <div class="row">

        

        <!-- Default box -->
        <div class="col-xs-3">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="{!! Auth::user()->images ? Auth::user()->images->path : "../public/vendors/LTE/dist/img/avatar5.png" !!}" alt="User profile picture">

                    <h3 class="profile-username text-center"><a href="{!! route('moto.profiles.index') !!}">{{\Illuminate\Support\Facades\Auth::user()->fullName}}</a></h3>

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

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{\App\Entities\Moto\Budgets::all()->count()}}</h3>
                    <p>Presupuestos</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-bookmark"></i>
                </div>
                <a href="{{route('moto.budgets.create')}}" class="small-box-footer">Nuevo Presupuesto <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red-active">
                <div class="inner">
                    <h3>{{\App\Entities\Moto\Sales::all()->count()}}</h3>
                    <p>Ventas</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{route('moto.sales.create')}}" class="small-box-footer">Nueva Venta <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-orange ">
                <div class="inner">
                    <h3>{{\App\Entities\Moto\Models::all()->count()}}</h3>
                    <p>Lista de Precios</p>
                </div>
                <div class="icon">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="{{route('moto.models.index')}}" class="small-box-footer">ir a Lista  <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>


    </div>
@endsection
