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
           {{-- <div class="col-xs-6 form-group">
              {!! Form::label('ROB') !!}
              {!! Form::text('rov', null, ['class'=>'form-control']) !!}
            </div> --}}
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
                <th>ROB</th>
                <th>CONS.</th>
                <th>Initial Stock</th>
                {{-- <th>On Hire Stock</th> --}}
                <th>Received</th>
                <th>Delivered</th>


                <th>Correction</th>
                <th>Obs.</th>
                <tbody>

                  @if(isset($models) && $services->dmReport->find($models->id)->DmrCargo != null  )
                       @foreach($services->dmReport->find($models->id)->dmrCargo as $key => $v)
                         <tr>
                           <td>{{$v->ServicesCargo->CargoTypes->name}}</td>
                           {{-- <td><input name=""  type='text'>
                                {{-- @foreach ($services->bySectors($key->CargoTypes->id) as $a)
                                     {{$a->cargo_types_id}}
                                       {{$a->sum}}
                                         {{$a->res}}
                                @endforeach
                           </td> --}}
                           <input type='hidden' name="types[{{$v->id}}]" value={{$v->id}}>
                           <input type='hidden' name="services_cargo_id[{{$v->id}}]" value={{$v->id}}>

                           <td><input class="rob"  id="{{$v->id}}" name="rob[{{$v->id}}]" value={{$v->rob}}></td>
                           <td><input class="cons" id="{{$v->id}}"  name="cons[{{$v->id}}]" value={{$v->cons}} ></td>
                           <td><input class="init" id="init[{{$v->id}}]" name="initial_stock[{{$v->id}}]" value={{$v->initial_stock}}></td>
                           <input type='hidden' name="ohstock[{{$v->id}}]"value={{$v->ohstock}} >

                           <td><input class="recieved" id="{{$v->cargo_types_id}}" name="recieved[{{$v->id}}]" value={{$v->recieved}}></td>
                           <td><input class="delievered" id="{{$v->cargo_types_id}}" name="delievered[{{$v->id}}]" value={{$v->delievered}}></td>

                           <td><input name="correction[{{$v->id}}]" value={{$v->correction}}></td>
                           <td><input name="obs[{{$v->id}}]" value="{{$v->obs}}"></td>
                         </tr>

                      @endforeach
                  @else
                    @forelse ($services->ServicesCargoByType as $key )

                      <tr>
                        <td>{{$key->CargoTypes->name}}</td>
                        {{-- <td><input name=""  type='text'>
                             {{-- @foreach ($services->bySectors($key->CargoTypes->id) as $a)
                                  {{$a->cargo_types_id}}
                                    {{$a->sum}}
                                      {{$a->res}}
                             @endforeach
                        </td> --}}

                        <?php
                          $con = 0;

                            if ( $services->bySectors($key->CargoTypes->id) != null )
                            {
                               $con = $key->quantity  + ($services->bySectors($key->CargoTypes->id)[0]->sum - $services->bySectors($key->CargoTypes->id)[0]->res );
                            }else {
                              $con = $services->dmReport->last()->cargoByType($key->cargo_types_id)[0]->cons;
                            }
                        ?>

                        <input type='hidden' name="types[{{$key->cargo_types_id}}]" value={{$key->cargo_types_id}}>
                        <input type='hidden' name="services_cargo_id[{{$key->cargo_types_id}}]" value={{$key->id}}>

                        <td><input class="rob"  name="rob[{{$key->cargo_types_id}}]" id="{{$key->cargo_types_id}}"></td>
                        <td><input class="cons" name="cons[{{$key->cargo_types_id}}]" value="{{$con }}"></td>

                        <td>
                          @if($services->dmReport != null )
                            <input class="init" name="initial_stock[{{$key->cargo_types_id}}]" value="{{$services->dmReport->last()->cargoByType($key->cargo_types_id)[0]->cons }}"  id="{{$key->cargo_types_id}}">
                          @else
                            <input class="init" name="initial_stock[{{$key->cargo_types_id}}]" value={{$key->quantity}} id="{{$key->cargo_types_id}}">
                          @endif
                        </td>

                        <input type='hidden' name="ohstock[{{$key->cargo_types_id}}]" value="0">

                        <td><input class="recieved" id="{{$key->cargo_types_id}}" name="recieved[{{$key->cargo_types_id}}]" value={{$services->bySectors($key->CargoTypes->id)[0]->sum or 0}}></td>
                        <td><input class="delievered" id="{{$key->cargo_types_id}}" name="delievered[{{$key->cargo_types_id}}]" value={{$services->bySectors($key->CargoTypes->id)[0]->res or 0}}></td>
                        <td><input name="correction[{{$key->cargo_types_id}}]"></td>
                        <td><input name="obs[{{$key->cargo_types_id}}]"></td>
                      </tr>
                    @endforeach
                  @endif



                  {{-- @foreach ($services->Ro as $key => $value)
                      $t = ($value['dr'] + $value['sum'] - 20) - $value['res'] ;

                    <tr>
                      <td>{{$key}}</td>
                      <td>
                        <input type="text" >
                      </td>

                      <td><strong>{{$t}}</strong></td>
                      <td>20</td>

                      <td>{{$value['dr']}}</td>
                      <td>{{$value['sum']}}</td>
                      <td>{{$value['res']}}</td>
                      <td><input type="text" value=0></td>
                      <td><input type="text" ></td>

                    </tr>
                  @endforeach --}}
                </tbody>
              </table>

            </div>




@endsection

@section('js')
<script>
  init = $('.init')

  $.map( init, function( val, i ) {
    id = val.id
    rec = $('.recieved')

    console.log(rec)
  })

  $('.rob').focusout(function(){
      id = this.id
      val = this.value
      cons =$('[name="cons['+id+']"]').val();


      $('[name="cons['+id+']"]').val( cons - val);

  })

</script>
@endsection
