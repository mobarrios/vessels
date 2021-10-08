@extends('template')

    @section('form_title')
       Orden # {{$models->id}}
    @endsection

 	@section('sectionContent')
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-solid">
          <div class="box-header">
            <div class="col-xs-8"><h3 class="box-title">  Venta # {{$models->id}}</h3></div>
              <a href="{{route('admin.items.reporte',$models->id)}}" target="_blank" class="btn btn-default pull-right" style="margin-left: 10px;" >Reporte</a>  
          </div>
        </div>
      </div>
    </div>


    <div class="row">

      <div class="col-xs-6">
          <div class="row">
        <div class="col-xs-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Cliente </h3>
            </div>

            <div class="box-body">
              <span class="text-muted">Codigo Cliente : </span> <strong>{{ isset($models->Cliente->id) ? $models->Cliente->id : '' }}</strong>
              <br><br>
              <span class="text-muted">Apellido y Nombre :</span><strong> {{ isset($models->Cliente->last_name) ? $models->Cliente->last_name : '' }}

               {{ isset($models->Cliente) ? $models->Cliente->name : '' }} 

              </strong>
              <br><br>
             <span class="text-muted"> Razon Social: </span><strong>{{ isset($models->Cliente->razon_social) ? $models->Cliente->razon_social : '' }}</strong>
              <br><br>
              <span class="text-muted">DNI:</span> <strong> {{ isset($models->Cliente->dni)  ? $models->Cliente->dni : ''}}</strong>
              <br><br>
              <span class="text-muted">CUIT:</span> <strong> {{ isset($models->Cliente->cuit)  ? $models->Cliente->cuit : ''}}</strong>
              <br><br>
              <span class="text-muted">Email:</span> <strong>{{ isset($models->Cliente->email) ? $models->Cliente->email : ''}}</strong>
              <br><br>
              <span class="text-muted">Direccion:</span> <strong> {{ isset($models->Cliente->address) ? $models->Cliente->address  : '' }} {{ isset($models->Cliente->Localidades) ? $models->Cliente->Localidades->name  : '' }}</strong>
              <br><br>
              <span class="text-muted">Tel / Cel:</span> <strong> {{ isset($models->Cliente->phone1) ? $models->Cliente->phone1 : '' }}</strong>

            </div>
          </div>
        </div>

        <div class="col-xs-12">
          <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">  Estados </h3>
          </div>
          <div class="box-body">
            <div class="col-lg-12">

              
              {!! Form::open(['route'=>('admin.items.updateEstado')]) !!}
              <div class="input-group">
                
                <select class="form-control select2" name="estado_id">
                  <option value="">Seleccionar Estado</option>
                  
                  @foreach($states as $key => $estado)
                 
                    @if( is_array(config('models.roles.estados.'.$key)) && in_array ( Auth::user()->Roles()->first()->slug, config('models.roles.estados.'.$key), true ) ) 

                      <option value="{{ $key }}"> {{ $estado }} </option>
                    @else
                       <option value="{{ $key }}" disabled > {{ $estado }} </option>
                    @endif

                  @endforeach

                </select>

                {!! Form::hidden('items_id', $models->id) !!}

                <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><span class="fa fa-plus"></span></button>
                </span>
                {!! Form::close() !!}

              </div>
            </div>
            <div class="col-lg-12">
                <table class="table">
                  <thead>
                  <tr>
                    <th>Fecha</th>
                    <th>Usuario</th>
                    <th>Estado</th>
                  </tr>
                  </thead>
                  <tbody>

                  @foreach($models->ItemsEstados as $orden)
     
                    <tr>
                      <td>{{ $orden->created_at }}</td>
                      <td>{{ isset($orden->User)  ? $orden->User->user_name : '' }}</td>
                      <td>{{ isset($orden->States->description) ? $orden->States->description : '' }}</td>
                      <td>
                        @if($orden->confirmar_cliente == 1)
                          <span class="label" style="background-color:green "> Confirmado por el cliente </span>
                        @endif
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12">
          <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">  Sucursales </h3>
          </div>
          <div class="box-body">
            <div class="col-lg-12">

              
              {!! Form::open(['route'=>('admin.items.updateSucursal')]) !!}
              <div class="input-group">
                
                <select class="form-control select2" name="sucursales_id">
                  <option value="">Seleccionar Sucursal</option>
                  
                  @foreach($branches as $key => $estado)
                      <option value="{{ $key }}"> {{ $estado }} </option>
                  @endforeach

                </select>

                {!! Form::hidden('items_id', $models->id) !!}

                <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><span class="fa fa-plus"></span></button>
                </span>
                {!! Form::close() !!}

              </div>
            </div>
            <div class="col-lg-12">
                <table class="table">
                  <thead>
                  <tr>
                    <th>Fecha</th>
                    <th>Usuario</th>
                    <th>Sucursal</th>
                  </tr>
                  </thead>
                  <tbody>

                  @foreach($models->ItemsSucursales as $orden)
                   
                    <tr>
                      <td>{{ $orden->created_at }}</td>
                      <td>{{ isset($orden->User)  ? $orden->User->user_name : '' }}</td>
                      <td>{{ isset($orden->Sucursal->name) ? $orden->Sucursal->name : '' }}</td>
                     
                    </tr>
                  @endforeach
                  </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>

      </div>
      </div>

      <div class="col-xs-6">
        <div class="row">
        <div class="col-xs-12">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">  Venta </h3>
          </div>
          <div class="box-body">

            <span class="text-muted">Sucursal : </span> <strong>{{ isset($models->Company->razon_social) ? $models->Company->razon_social : '' }}</strong>
            <br><br> 
            <span class="text-muted">ID Reparación : </span> <strong>{{ isset($models->Compra->Orden) ? $models->Compra->Orden->id : '' }}</strong>
            <br><br> 
            <span class="text-muted">ID Compra : </span> <strong>{{ $models->Compra->id }}</strong>
            <br><br>  
            <span class="text-muted">Marca : </span> <strong>{{ isset($models->Models->Brands) ? $models->Models->Brands->name : '' }}</strong>
            <br><br>
            <span class="text-muted">Modelo : </span> <strong>{{ isset($models->Models) ? $models->Models->name : '' }}</strong>
            <br><br>
            <span class="text-muted">IMEI: </span> <strong>{{ $models->Compra->numero_serie }}</strong>
            <br><br>
            <span class="text-muted">Capacidad: </span> <strong>{{ $models->Compra->capacidad }}</strong>
            <br><br>
            <span class="text-muted">Color: </span> <strong>{{ $models->Compra->color }}</strong>
            <br><br>
            <span class="text-muted">Accesorios extras: </span> <strong>{{ $models->Compra->accesorios }}</strong>
            <br><br>
            <span class="text-muted">Cantidad : </span> <strong>{{ $models->Compra->cantidad }}</strong>
            <br><br>
            <span class="text-muted">Precio Compra : </span> <strong>$ {{ $models->Compra->precio_unitario }}</strong>
            <br><br>
            <span class="text-muted">Precio Venta : </span> <strong>$ {{ $models->Compra->precio_venta  }}</strong>
            <br><br>
            <span class="text-muted">Condición u Observaciones para venta: </span> <strong>{{ $models->Compra->observacion }}</strong>
            <br>
          </div>
        </div>
      </div>

      </div>
    </div>

    </div>




@endsection