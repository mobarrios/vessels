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
          {!! Form::label('Departure Location') !!}
          {!! Form::select('locations_id', $locations, null, ['class'=>'form-control select2']) !!}
        </div>
         <div class="col-xs-6 form-group">
          {!! Form::label('departure_time') !!}
          {!! Form::time('departure_time', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
          {!! Form::label('Cargo tonnage (= Manifest)') !!}
          {!! Form::text('cargo_tonnage', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
          {!! Form::label('Deck Area loaded (%)') !!}
          {!! Form::text('docker_area_loaded', null, ['class'=>'form-control']) !!}
        </div>
         <div class="col-xs-6 form-group">
          {!! Form::label('Garbage skips to disembark') !!}
          {!! Form::text('garbage_disembark', null, ['class'=>'form-control']) !!}
        </div>
         <div class="col-xs-6 form-group">
          {!! Form::label('Garbage skips required on arrival') !!}
          {!! Form::text('garbage_arribal', null, ['class'=>'form-control']) !!}
        </div>
         <div class="col-xs-6 form-group">
          {!! Form::label('MGO Required	') !!}
          {!! Form::text('mgo_required', null, ['class'=>'form-control']) !!}
        </div>
         <div class="col-xs-6 form-group">
          {!! Form::label('FW Required') !!}
          {!! Form::text('fw_required', null, ['class'=>'form-control']) !!}
        </div>
         <div class="col-xs-6 form-group">
          {!! Form::label('POB (crew)') !!}
          {!! Form::text('pob', null, ['class'=>'form-control']) !!}
        </div>
         <div class="col-xs-6 form-group">
          {!! Form::label('Passengers transported Inbound Port') !!}
          {!! Form::text('pax_inbound', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
          {!! Form::label('Passengers transported Outbound Port') !!}
          {!! Form::text('pax_inbound', null, ['class'=>'form-control']) !!}
        </div>
         <div class="col-xs-6 form-group">
          {!! Form::hidden('services_id', 2, ['class'=>'form-control']) !!}
        </div>
        
        

@endsection
