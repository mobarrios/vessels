@extends('template.model_form')

    @section('form_title')
        New Sector
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
        @endif


          {!! Form::hidden('vessels_id',3) !!}

            <div class="col-xs-6 form-group">
              {!! Form::label('Name') !!}
              {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('Type') !!}
              {!! Form::select('sectors_types_id', ['' => 'Seleccionar', 1 => 'TANK', 2 => 'CONTAINER' , 3 => 'BULK' ], null, ['class'=>'form-control select2']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Capacities') !!}
                {!! Form::text('capacities', null, ['class'=>'form-control']) !!}
            </div>

            <div class="col-xs-6 form-group">
              {!! Form::label('UM') !!}
              {!! Form::select('un', ['' => 'Seleccionar', 1 => 'Cm3', 2 => 'Lt' , 3 => 'Mt3'] , null, ['class'=>'form-control select2']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Sector Cargo Types Availables') !!}
                {!! Form::select('sector_cargo_types_id[]', $cargoTypes, null, ['class'=>'form-control selectMulti','multiple'=>'']) !!}
            </div>



@endsection
