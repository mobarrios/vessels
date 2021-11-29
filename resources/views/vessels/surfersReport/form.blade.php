@extends('template.model_form')

    @section('form_title')
        New Surfers Activity Report
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
        @endif

            <div class="col-xs-6 form-group">
              {!! Form::label('departure_time') !!}
              {!! Form::date('departure_time', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('start_trip_time') !!}
              {!! Form::text('start_trip_time', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('embarqued_pax') !!}
              {!! Form::text('embarqued_pax', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('arribal_location') !!}
              {!! Form::text('arribal_location', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('desembark_pax') !!}
              {!! Form::text('desembark_pax', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('std_by_periods') !!}
              {!! Form::text('std_by_periods', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('mgo_opening_stocks') !!}
              {!! Form::text('mgo_opening_stocks', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('mgo_recived') !!}
              {!! Form::text('mgo_recived', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('mgo_recived_from') !!}
              {!! Form::text('mgo_recived_from', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('mgo_closing_stock') !!}
              {!! Form::text('mgo_closing_stock', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('mgo_consumed') !!}
              {!! Form::text('mgo_consumed', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('services_id') !!}
              {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('locations_id') !!}
              {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            

@endsection
