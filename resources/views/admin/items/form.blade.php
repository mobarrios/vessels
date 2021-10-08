@extends('template.model_form')

    @section('form_title')
        Nuevo Artículo
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'),$models->id]]) !!}
        @else
            {!! Form::open(['route'=>config('models.'.$section.'.storeRoute')]) !!}
        @endif

        {!! Form::hidden('status','1') !!}

         <div class="col-xs-12">
    <h4> Detalles de la venta</h4>
    </div>

    <div class="col-xs-3 form-group">
      {!! Form::label('Cliente') !!}
      {!! Form::select('clients_id', $clients , isset($models->Cliente) ? $models->Cliente->id : '' ,['class'=>'select2 form-control ', 'placeholder' => 'seleccionar Cliente']) !!}
 
    </div>

    <div class="col-xs-3 form-group">
      {!! Form::label('Vendedor') !!}
      {!! Form::select('users_id', $users , isset($models->Vendedor) ? $models->Vendedor->id : '' ,['class'=>'select2 form-control ', 'placeholder' => 'seleccionar Vendedor']) !!}
    
    </div>


    <div class="col-xs-6 form-group">
      {!! Form::label('Compañia') !!}
      {!! Form::select('companies_id', $companies , auth()->user()->branchesActive->company->id ,['class'=>'select2 form-control ', 'placeholder' => 'seleccionar Compañia']) !!}
    </div>

    {{--
    <div class="col-xs-3 form-group">
      {!! Form::label('Sucursal de venta') !!}
      {!! Form::select('sucursales_id', $branches , isset($models->Sucursal) ? $models->Sucursal->id : '',['class'=>'select2 form-control ', 'placeholder' => 'seleccionar Sucursal']) !!}
    </div>
    --}}

    <div class="col-xs-12">
    <h4> Datos del producto</h4>
    </div>

    <div class="col-xs-3 form-group">
      {!! Form::label('Modelos') !!}
       <select name='models_id' class="select2 form-control" placeholder="seleccionar Cliente" >
        @foreach($brands as $br)
            <optgroup label="{{$br->name}}">
                @foreach($br->Models as $m)
                    <option value="{{$m->id}}" @if(isset($models) && ($models->models_id == $m->id)) selected="selected" @endif>{{$m->name}}</option>
                @endforeach
            </optgroup>
        @endforeach
      </select>
    </div>

    <div class="col-xs-3 form-group">
    {!! Form::label('Serie/IMEI') !!}
    {!! Form::text('numero_serie', isset($models->Compra) ? $models->Compra->numero_serie : '', ['class'=>'form-control']) !!}
  
    
    </div>

    <div class="col-xs-3 form-group">
      {!! Form::label('Capacidad') !!}
      {!! Form::text('capacidad', isset($models->Compra) ? $models->Compra->capacidad : '', ['class'=>'form-control']) !!}
    </div>

    <div class="col-xs-3 form-group">
      {!! Form::label('Color') !!}
      {!! Form::text('color', isset($models->Compra) ? $models->Compra->color : '', ['class'=>'form-control']) !!}
    </div>

    <div class="col-xs-12">
    <h4> Datos de la operación</h4>
    </div>
    {{--
    <div class="col-xs-3 form-group">
      {!! Form::label('Estados') !!}
      {!! Form::select('states_id', $states , isset($models->Sucursal) ? $models->Sucursal->id : '',['class'=>'select2 form-control ', 'placeholder' => 'seleccionar Sucursal']) !!}
    </div>

      --}}
    <div class="col-xs-3 form-group">
      {!! Form::label('Accesorios Extras') !!}
      {!! Form::text('accesorios', isset($models->Compra) ? $models->Compra->accesorios : '', ['class'=>'form-control']) !!}
    </div>

    <div class="col-xs-3 form-group">
      {!! Form::label('Precio Venta') !!}
      {!! Form::text('precio_venta', isset($models->Compra) ? $models->Compra->precio_venta : '', ['class'=>'form-control']) !!}
    </div>

     <div class="col-xs-12 form-group">
      {!! Form::label('Condición u Observaciones para venta') !!}
      {!! Form::textarea('observacion', isset($models->Compra) ? $models->Compra->observacion : '', ['class'=>'form-control', 'rows' => '5' ]) !!}
    </div>

@endsection



