@extends('template.model_form')

    @section('form_title')
        New Departure Report
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
        @endif

         <div class="col-xs-6 form-group">
          {!! Form::label('departure_time') !!}
          {!! Form::text('departure_time', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
          {!! Form::label('cargo_tonnage') !!}
          {!! Form::text('cargo_tonnage', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
          {!! Form::label('docker_area_loaded') !!}
          {!! Form::text('docker_area_loaded', null, ['class'=>'form-control']) !!}
        </div>
         <div class="col-xs-6 form-group">
          {!! Form::label('garbage_disembark') !!}
          {!! Form::text('garbage_disembark', null, ['class'=>'form-control']) !!}
        </div>
         <div class="col-xs-6 form-group">
          {!! Form::label('garbage_arribal') !!}
          {!! Form::text('garbage_arribal', null, ['class'=>'form-control']) !!}
        </div>
         <div class="col-xs-6 form-group">
          {!! Form::label('mgo_required') !!}
          {!! Form::text('mgo_required', null, ['class'=>'form-control']) !!}
        </div>
         <div class="col-xs-6 form-group">
          {!! Form::label('fw_required') !!}
          {!! Form::text('fw_required', null, ['class'=>'form-control']) !!}
        </div>
         <div class="col-xs-6 form-group">
          {!! Form::label('pob') !!}
          {!! Form::text('pob', null, ['class'=>'form-control']) !!}
        </div>
         <div class="col-xs-6 form-group">
          {!! Form::label('pax_inbound') !!}
          {!! Form::text('pax_inbound', null, ['class'=>'form-control']) !!}
        </div>
         <div class="col-xs-6 form-group">
          {!! Form::label('services_id') !!}
          {!! Form::text('services_id', null, ['class'=>'form-control']) !!}
        </div>
         <div class="col-xs-6 form-group">
          {!! Form::label('locations_id') !!}
          {!! Form::text('locations_id', null, ['class'=>'form-control']) !!}
        </div>
        

@endsection
