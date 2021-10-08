@extends('template')

    @section('form_title')
       Orden # {{$models->id}}
    @endsection

  @section('sectionContent')
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-solid">
        <div class="box-header">
          <div class="col-xs-8"><h3 class="box-title">  Orden # {{$models->id}}</h3></div>
          {{--
          <div class="col-xs-4"><div class="btn-group pull-right">
                <button type="button" class="btn btn-default btn-flat">Acciones</button>
                <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#" data-toggle="modal" data-target="#modal-default" >Servicios</a></li>
                  <li class="divider"></li>
                  <li><a href="{{route('admin.ordenes.reporte',$models->id)}}" target="_blank">PDF</a></li>
                </ul>
              </div>
          </div>
          --}}
          <a href="{{route('admin.ordenes.reporte',$models->id)}}" target="_blank" class="btn btn-default pull-right" style="margin-left: 10px;" >Reporte</a>  

          <a href="{{route('admin.ordenes.remito',$models->id)}}" target="_blank" class="btn btn-default pull-right ">Remito</a>  
          
        </div>
      </div>
    </div>


    <div class="row">  
    <div class="col-xs-12">  
      <div class="col-xs-4">

        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Cliente </h3>
          </div>

          <div class="box-body">
            <span class="text-muted">Codigo Cliente : </span> <strong>{{ isset($models->Cliente->id) ? $models->Cliente->id : '' }}</strong>
            <br>
            <span class="text-muted">Apellido y Nombre :</span><strong> {{ isset($models->Cliente->last_name) ? $models->Cliente->last_name : '' }}

             {{ isset($models->Cliente) ? $models->Cliente->name : '' }} 

            </strong>
            <br>
           <span class="text-muted"> Razon Social: </span><strong>{{ isset($models->Cliente->razon_social) ? $models->Cliente->razon_social : '' }}</strong>
            <br>
            <span class="text-muted">DNI / CUIT:</span> <strong> {{ isset($models->Cliente->dni)  ? $models->Cliente->dni : ''}}</strong>
            <br>
            <span class="text-muted">Email:</span> <strong>{{ isset($models->Cliente->email) ? $models->Cliente->email : ''}}</strong>
            <br>
            <span class="text-muted">Direccion:</span> <strong> {{ isset($models->Cliente->address) ? $models->Cliente->address  : '' }} {{ isset($models->Cliente->Localidades) ? $models->Cliente->Localidades->name  : '' }}</strong>
            <br>
            <span class="text-muted">Tel / Cel:</span> <strong> {{ isset($models->Cliente->phone1) ? $models->Cliente->phone1 : '' }}</strong>

          </div>
        </div>
      </div>

      <div class="col-xs-4">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">  Equipo </h3>
          </div>
          <div class="box-body">
            
            <span class="text-muted">Equipo : </span> <strong>{{ isset($models->Equipo) ? $models->Equipo->name : '' }}</strong>
            <br>
            
            <span class="text-muted">Clave Equipo : </span> <strong>{{ $models->clave_equipo }}</strong>
            <br>
            <span class="text-muted">Marca : </span> <strong>{{ isset($models->Model->Brands) ? $models->Model->Brands->name : '' }}</strong>
            <br>
            <span class="text-muted">Modelo : </span> <strong>{{ isset($models->Model) ? $models->Model->name : '' }}</strong>
            <br>
            <span class="text-muted">Número Serie : </span> <strong>{{ $models->numero_serie  }}</strong>
            
            <br>
            <span class="text-muted">Parte : </span> <strong>{{ $models->partes  }}</strong>
        
            <br>
            <span class="text-muted">Partes Serie : </span> <strong>{{ $models->serie_partes  }}</strong>
            <br>
            <span class="text-muted">Falla :</span> <strong> {{ $models->numero_serie  }}</strong>
            <br>
            <span class="text-muted">Presupuesto : </span> <strong>$ {{ $models->presupuesto_estimado  }}</strong>
            <br>
      
            <span class="text-muted">Observaciones :</span> <strong> {{ $models->observaciones  }}</strong>
            <br>
            
          </div>
        </div>
      </div>

      <div class="col-xs-4">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">  Técnico </h3>
          </div>
          <div class="box-body">
              {!! Form::open(['route'=>('admin.ordenes.updateUser')]) !!}
              <div class="input-group">
                {!! Form::select('users_id',$users, isset($models->users_id) ? $models->users_id : null, ['class'=>'form-control select2']) !!}
                {!! Form::hidden('orden_id', $models->id) !!}
                <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><span class="fa fa-edit"></span></button>
                </span>
              </div>
              {!! Form::close() !!}
              <br>
              <span class="text-muted">Usuario  : </span> <strong>{{ isset($models->User) ? $models->User->user_name : '' }}</strong>
              <br><span class="text-muted">Falla Declarada :</span> <strong> {{ $models->falla_declarada  }}</strong>
              {{--
              <br><span class="text-muted">Observaciones :</span> <strong> {{ $models->observaciones  }}</strong>
                --}}
          </div>
        </div>


      </div>
    </div>  
  </div>
  

  <div class="row">
    <div class="col-xs-12">
      <div class="col-xs-6">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">  Estados </h3>
          </div>
          <div class="box-body">
            <div class="col-lg-12">
              {!! Form::open(['route'=>('admin.ordenes.updateEstado')]) !!}
              <div class="input-group">
                {!! Form::select('estado_id',$states, isset($models->estado_id) ? $models->estado_id : null, ['class'=>'form-control select2']) !!}
                {!! Form::hidden('orden_id', $models->id) !!}

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
                  @foreach($models->OrdenEstados as $orden)
                    <tr>
                      <td>{{ $orden->created_at }}</td>
                      <td>{{ isset($orden->User)  ? $orden->User->user_name : '' }}</td>
                      <td>{{ isset($orden->States->description) ? $orden->States->description : '' }}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
            </div>

          </div>
        </div>
      </div>

      <div class="col-xs-6">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title"> Vendedor </h3>
          </div>
          <div class="box-body">
              {!! Form::open(['route'=>('admin.ordenes.updateVendedor')]) !!}
              <div class="input-group">
                {!! Form::select('vendedor_id',$users, isset($models->vendedor_id) ? $models->vendedor_id : null, ['class'=>'form-control select2']) !!}
                {!! Form::hidden('orden_id', $models->id) !!}
                <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><span class="fa fa-edit"></span></button>
                </span>
              </div>
              {!! Form::close() !!}
              <br>
              <span class="text-muted">Vendedor  : </span> <strong>{{ isset($models->Vendedor) ? $models->Vendedor->user_name : '' }}</strong>
          </div>
        </div>

        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title"> Pagos </h3>
          </div>
          <div class="box-body">
            <table class="table table-striped">

              {!! Form::open(['route'=>('admin.ordenes.updatePagos')]) !!}
              <tbody>
              <tr>

                <td width="45%">Presupuesto Estimado</td>
                <td>
                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control input-sm" name="presupuesto_estimado" value="{{$models->presupuesto_estimado}}">

                    <span class="input-group-addon">.00</span>
                  </div>
                  @if(count($models->Services) > 0)
                    <?php $con = 0; ?>

                    @foreach($models->Services as $s)
                    <?php $con += $s->pivot->cantidad * $s->amount ?>
                    @endforeach

                    <code>Presupuesto + Servicio = ${{ $models->presupuesto_estimado + $con }} </code>
                  @endif
                </td>
              </tr>
              <tr>
                <td width="45%">Abonado</td>
                <td>
                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control input-sm" value="{{$models->pagado}}" name="pagado">
                    <span class="input-group-addon">.00</span>
                    {!! Form::hidden('orden_id', $models->id) !!}
                  </div>
                </td>
              </tr>
              <tr>
                <td></td>
                <td><button type="submit" class="btn btn-primary pull-right">Guardar</button></td>
              </tr>
              </tbody>
              {!! Form::close() !!}
            </table>

          </div>
        </div>
      </div>

    </div>  
  </div> 


  <div class="row">
    <div class="col-xs-12">
      <div class="col-xs-6">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title"> Observaciones Tecnicas </h3>
          </div>
          <div class="box-body">
            <!-- textarea -->
            {!! Form::open(['route'=>('admin.ordenes.updateObservaciones')]) !!}
            <div class="form-group">
              <label>FALLA DECLARADA</label>
              <textarea class="form-control" rows="3" name="falla_declarada" >{{$models->falla_declarada}}</textarea>
            </div>
            <div class="form-group">
              <label>OBSERVACIONES</label>
              <textarea class="form-control" rows="3" name="observaciones">{{$models->observaciones}}</textarea>
            </div>
            
            <div class="form-group">
              <label>INFORME TECNICO INICIAL</label>
              <textarea class="form-control" rows="3" name="observaciones_tecnicas">{{$models->observaciones_tecnicas}}</textarea>
            </div>
            
            <div class="form-group">
              <label>INFORME TECNICO FINAL</label>
              <textarea class="form-control" rows="3" name="partes">{{$models->partes}}</textarea>
            </div>

            <div class="form-group">
              <label>REPARACION</label>
              <textarea class="form-control" rows="3" name="observaciones_internas">{{$models->observaciones_internas}}</textarea>
            </div>

            {!! Form::hidden('orden_id', $models->id) !!}
            <button type="submit" class="btn btn-primary pull-right">Guardar</button>
            {!! Form::close() !!}
          </div>
        </div>
    </div>

    <div class="col-xs-6">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title"> Servicios </h3>
            <a href="#" data-toggle="modal" data-target="#modal-default" class="btn btn-default pull-right"><i class="fa fa-plus" ></i></a>
          </div>
          <div class="box-body">
           <table class="table table-condensed">
                <tbody>
                @foreach($models->Services as $s)
      
                <tr>
                  <th>Descripción: {{$s->description}}</th>
                  <th>Iva: {{$s->iva}}</th>
                  <th>Precio: ${{$s->amount}}</th>
                  <th>Cantidad: {{$s->pivot->cantidad}}/ ${{$s->pivot->cantidad * $s->amount}}</th>
                  
                  <th><a href="{{route('admin.ordenes.deleteServices', $s->pivot->id)}}"class="btn btn-default btn-xs pull-right btn-borrar">
                    <i class="fa fa-trash"></i> Borrar</a></th>
                </tr>
                @endforeach
              </tbody>
            </table>


          </div>
        </div>
    </div>

  </div>
</div>


  <div class="row">
    <div class="col-xs-12">
      <div class="col-xs-6">

        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title"> Testeos </h3>
          </div>
          <div class="box-body">
            
            {!! Form::model($models,['route'=>('admin.ordenes.updateTasks')]) !!}
            


            <div class="col-xs-12 table-responsive">
              <table class="table-condensed">
                {{-- <thead>                  
                  <th></th>
                  <th>Control</th>
                </thead> --}}
                <tbody>
                  @foreach($tasks as $task)
                    <tr>
                      <td>
                          <input type="checkbox" name="estado[{{$task->id}}]" value="1" {{ !is_null($models->findTasks($task->id)) && $models->findTasks($task->id)->pivot->estado == 1 ? 'checked' : ''  }} >
                      </td>
                      <td>{!! $task->descripcion !!}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>

            </div>



          {{-- 
              @foreach($tasks as $task)

              <div class="col-xs-2 form-group">
                {!! $task->descripcion !!}
              </div>
              <div class="col-xs-2 form-group">
    <input type="checkbox" name="estado[{{$task->id}}]" value="1" {{ !is_null($models->findTasks($task->id)) && $models->findTasks($task->id)->pivot->estado == 1 ? 'checked' : ''  }} >
              


              </div>           

              @endforeach --}}

            {!! Form::hidden('orden_id', $models->id) !!}

            <button type="submit" class="btn btn-primary pull-right">Guardar</button>
            {!! Form::close() !!}
          </div>
        </div>
    </div>
  </div>
</div>

</div>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Servicios</h4>
        </div>
        <div class="modal-body">
           <table class="table table-bordered table-striped">
            <thead>
            <tr>
              <th></th>
              <th>Descripción </th>
              <th>Importe</th>
              <th>Iva</th>
              <th>Cantidad</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($services as $s)

            {!! Form::open(['route'=>'admin.ordenes.addServices']) !!}
            <tr>
              {!! Form::hidden('orders_id',$models->id)!!}
              {!! Form::hidden('services_id', $s->id)!!}
              <td>#</td>
              <td>{{$s->description}}</td>
              <td>$ {{$s->amount}}</td>
              <td>{{$s->iva}}</td>
              <td>{!! Form::number('cantidad',null,['class'=>'form-control input-sm', 'style' => 'height:20px;', 'required'=>true]) !!}</td>
              <td><button type="submit" class="btn btn-primary btn-xs">Guardar</button></td>
            </tr>
            {!! Form::close() !!}
            @endforeach
            </tbody>

          </table>
        </div>
      
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

@endsection

@section('js')
<script> 
$('#example1').DataTable() 
</script>
@endsection

{{--
@section('js')
<script> 
$('#example1').DataTable() 

$('.btn-borrar').click(function (e){
     var result = confirm('¿Desea quitar el servicio?')
   if (result) {
      return true;
    } else {
      return false;
    }
   e.preventDefault();
});
</script>
@endsection
--}}