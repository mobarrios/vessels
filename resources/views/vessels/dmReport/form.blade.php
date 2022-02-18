@extends('template.model_form')

    @section('form_title')
        New Daily Midnight Report
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
        @endif
            <div class="col-xs-6 form-group">
              {!! Form::label('Position/ Location	') !!}
              {!! Form::select('locations_id', $locations,null, ['class'=>'form-control select2']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('Deck Area loaded (%)') !!}
              {!! Form::text('docker_area_loaded', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('Main Engine Running hours') !!}
              {!! Form::text('main_engine_hours', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('Thrusters/ azymuthal Running hours') !!}
              {!! Form::text('thrusted_hours', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('Drills carried out') !!}
              {!! Form::text('drills_carried_out', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('Fi-Fi monitor test') !!}
              {!! Form::text('fifi_monitor_test', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('Incidents/ Accidents') !!}
              {!! Form::text('incidents_accidents', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('Main Engines/ Gensets') !!}
              {!! Form::text('main_engines', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('Propellers/ Thrusters/ Azimuthals/ Jets') !!}
              {!! Form::text('propellers', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('DP capability') !!}
              {!! Form::text('dp', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('AH systems/ gears') !!}
              {!! Form::text('ah', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('MGO transfer system') !!}
              {!! Form::text('mgo_trf_sys', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('Bulk/ Liquid cargo system') !!}
              {!! Form::text('bulk_cargo_sys', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('Pax capacity') !!}
              {!! Form::text('pax_capacity', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('Fi-Fi capability') !!}
              {!! Form::text('fifi_capability', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('Oil Response/ Recovery') !!}
              {!! Form::text('oil_resp', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('Helideck') !!}
              {!! Form::text('helideck', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('Main Crane') !!}
              {!! Form::text('main_crane', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('ROV') !!}
              {!! Form::text('rov', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('Observations') !!}
              {!! Form::text('obs', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::hidden('services_id', $services->id, ['class'=>'form-control']) !!}
            </div>

            <div class="col-xs-12">
              <table class="table">
                <th>Cargo</th>
                <th>Total</th>

                <th>Departure Report</th>
                <th>Act. Received</th>
                <th>Act. Delivered</th>

                <?php
                  $t = 0;
                ?>
                <tbody>
                  @foreach ($services->Ro as $key => $value)
                    <?php
                    $t = ($value['dr'] + $value['sum'] ) - $value['res'] ;
                    ?>
                    <tr>
                      <td>{{$key}}</td>
                      <td><strong>{{$t}}</strong></td>
                      <td>{{$value['dr']}}</td>
                      <td>{{$value['sum']}}</td>
                      <td>{{$value['res']}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>

            </div>



@endsection
