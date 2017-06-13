@extends('template.model_form')

    @section('form_title')
        Nuevo Registro
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
        @endif

            <div class="col-xs-12 form-group">
              {!! Form::label('Nombre Registro') !!}
              {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

        <div class="col-xs-12 form-group">
            {!! Form::label('Dirección') !!}
            {!! Form::text('address', null, ['class'=>'form-control']) !!}
        </div>

        <div class="col-xs-12 form-group">
            {!! Form::label('Localidad') !!}
            <select name="localidades_id" class="select2 form-control">
                @foreach($provincias as $provincia)
                    <optgroup label="{{$provincia->name}}">
                        @foreach($provincia->Municipios as $municipio)
                            <optgroup  label="{{$municipio->name}}">
                                @foreach($municipio->Localidades as $localidad)
                                    <option value="{{$localidad->id}}">{{$localidad->name}}</option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    </optgroup>
                @endforeach
            </select>
        </div>

        <div class="col-xs-12 form-group">
            {!! Form::label('Teléfono') !!}
            {!! Form::text('phone', null, ['class'=>'form-control']) !!}
        </div>



        <div class="col-xs-12 form-group">
            {!! Form::label('Alta Patente') !!}
            {!! Form::text('alta_patente_importe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-12 form-group">
            {!! Form::label('Larga Distancia') !!}
            {!! Form::text('larga_distancia_importe', null, ['class'=>'form-control']) !!}
        </div>


@endsection

