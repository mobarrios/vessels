@extends('template.model_form')

    @section('form_title')
        New Activity
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
        @endif


          {!! Form::hidden('services_id',1) !!}
          {!! Form::hidden('users_id',Auth::user()->id) !!}
          {!! Form::hidden('sectors_id',1 ) !!}

            <div class="col-xs-3 form-group">
              {!! Form::label('Start Date') !!}
              {!! Form::text('start_date', null, ['class'=>'form-control datetimepicker']) !!}

            </div>
          
            <div class="col-xs-3 form-group">
              {!! Form::label('End Date') !!}
              {!! Form::text('end_date', null, ['class'=>'form-control datetimepicker']) !!}
            </div>
            
            <div class="col-xs-6 form-group">
              {!! Form::label('Operation Type') !!}
              {!! Form::select('operations_types_id', $operationsTypes , null, ['class'=>'form-control select2']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('Location') !!}
              {!! Form::select('locations_id', $locations, null, ['class'=>'form-control select2']) !!}
            </div>
            <div class="col-xs-2 form-group">
                {!! Form::label('Quantity') !!}
                {!! Form::number('quantity', null, ['class'=>'form-control']) !!}
            </div>

            {{-- <div class="col-xs-3 form-group">
              {!! Form::label('UM') !!}
              {!! Form::select('um', ['' => 'Seleccionar', 1 => 'Cm3', 2 => 'Lt' , 3 => 'Mt3'] , null, ['class'=>'form-control select2']) !!}
            </div> --}}

            <div class="col-xs-10 form-group">
                {!! Form::label('Cargo Types') !!}
                {!! Form::select('cargo_types_id', $cargoTypes , null, ['class'=>'form-control select2']) !!}
            </div>



@endsection
