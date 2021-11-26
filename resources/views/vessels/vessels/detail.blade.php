@extends('template')

@section('sectionContent')
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-solid">
        <div class="box-header">
          <div class="col-xs-8"><h3 class="box-title">  {{$model->name}}</h3></div>
            {{-- <a href="{{route('admin.purcharses.reporte',$models->id)}}" target="_blank" class="btn btn-default pull-right" style="margin-left: 10px;" >Reporte</a> --}}
        </div>
        <div class="box-body">
          @foreach($model->typesTotalCapcities as $total)
              {{$total->name}} : {{$total->total}} <br>
          @endforeach
        </div>
      </div>
    </div>

  <div class="row">
  <div class="col-xs-12">

    @foreach($model->Sectors as $sector)
    <div class="col-xs-2">
      <div class="box box-solid">
        <div class="box-header with-border">
          <strong class="box-title">{{$sector->name}}</strong>
          @foreach ($sector->CargoTypes as  $cargo)
            <h4 class="box-subtitle">{{$cargo->name}}</h4>
          @endforeach
        </div>
        <div class="box-body">

          <div class="progress" style="height:50px">
              <div class="progress-bar bg-red" style="width:40%; height:50px">
                {{-- <strong>40 %</strong> --}}
                {{$sector->capacities}} m3
              </div>
              {{-- <div class="progress-bar " style="width:60%; height:50px">
                <strong>60 %</strong>
                432000 mt3
              </div> --}}
          </div>

        </div>
      </div>
    </div>
  @endforeach







  </div>


  </div>


  {{-- <div class="col-xs-12">
     <div class="box box-solid">
       <div class="box box-solid">
        <div class="box-body"> --}}
        {{-- <a href="{{ route('admin.items.compra', $models->id )}}" class="btn btn-success btn-md pull-right btnVenta {{ $models->Venta ? 'disabled' : '' }}"> --}}
        {{-- <i class="fa fa-shopping-cart"></i> Generar venta</a>
        </div>
      </div>
    </div>
  </div> --}}



@endsection
