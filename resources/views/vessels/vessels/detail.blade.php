@extends('template')

@section('sectionContent')
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-solid">
        <div class="box-header">
          <div class="col-xs-8"><h3 class="box-title">  Vessel # 1</h3></div>
            {{-- <a href="{{route('admin.purcharses.reporte',$models->id)}}" target="_blank" class="btn btn-default pull-right" style="margin-left: 10px;" >Reporte</a> --}}
        </div>
      </div>
    </div>

  <div class="row">
  <div class="col-xs-12">

    <div class="col-xs-3">
      <div class="box box-solid">
        <div class="box-header with-border">
          <strong class="box-title">Tank 1  </strong>
          <h4 class="box-subtitle">MGO</h4>
        </div>
        <div class="box-body">

          <div class="progress" style="height:50px">
              <div class="progress-bar bg-red" style="width:40%; height:50px">
                <strong>40 %</strong>
                375000 mt3
              </div>
              <div class="progress-bar " style="width:60%; height:50px">
                <strong>60 %</strong>
                432000 mt3
              </div>
          </div>

        </div>
      </div>
    </div>

    <div class="col-xs-3">
      <div class="box box-solid">
        <div class="box-header with-border">
          <strong class="box-title">Tank 2  </strong>
          <h4 class="box-subtitle">FW</h4>
        </div>
        <div class="box-body">

          <div class="progress" style="height:50px">
              <div class="progress-bar bg-red" style="width:20%; height:50px">
                <strong>20 %</strong>
                125000 mt3
              </div>
              <div class="progress-bar " style="width:80%; height:50px">
                <strong>80 %</strong>
                182000 mt3
              </div>
          </div>

        </div>
      </div>
    </div>





  
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
