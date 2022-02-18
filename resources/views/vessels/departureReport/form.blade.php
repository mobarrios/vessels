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
          {!! Form::text('pax_outbound', null, ['class'=>'form-control']) !!}
        </div>
         <div class="col-xs-6 form-group">
          {!! Form::hidden('services_id', Session::get('servicesId'), ['class'=>'form-control']) !!}
        </div>

        <div class="col-xs-12">
          <strong>Sectors</strong>
            <table class="table">
              <thead>
                <th>#</th>
                <th>Name</th>
                <th>Cap.Max </th>
                <th colspan="2">Types Available</th>
                {{-- <th>Actual Cap.</th> --}}
              </thead>
              <tbody>
              @if(isset($models))
                @foreach ($models->DepartureReportCargo as $cargo)
                  <tr>
                  <td>{{$cargo->sectors_id}}</td>
                  <td>{{$cargo->Sectors->name}}</td>
                  <td>{{$cargo->Sectors->capacities}} <small> {{$cargo->Sectors->um}} </small></td>
                  <td>
                  <select  name="actualCapType[{{$cargo->id}}]">
                       @foreach($cargo->Sectors->CargoTypes as $type)
                         <option {{($cargo->cargo_types_id == $type->id ? 'Selected' : '')}} value={{$type->id}}>{{$type->name}}</option>
                       @endforeach
                 </select>
                  </td>
                  <td>
                    <input type="text" name="actualCap[{{$cargo->id}}]" value="{{$cargo->quantity}}" >
                  </td>
                 </tr>
                @endforeach
              @else
                @foreach ($services->Vessels->Sectors as $sector)
                  <tr>
                  <td>{{$sector->id}}</td>
                  <td>{{$sector->name}}</td>
                  <td>{{$sector->capacities}} <small> {{$sector->um}} </small></td>
                        <td>
                         {{-- <input type="radio" name="actualCapType[{{$sector->id}}]" value="{{$type->id}}" >  <strong style="margin-left: 10px">{{$type->name}} </strong> --}}
                           <select  name="actualCapType[{{$sector->id}}]">
                                @foreach($sector->CargoTypes as $type)
                                  <option value={{$type->id}}>{{$type->name}}</option>
                                @endforeach
                          </select>

                        </td>
                        <td>
                         <input type="text" name="actualCap[{{$sector->id}}]"  >
                        </td>
                 </tr>
                @endforeach
              @endif
              </tbody>
            </table>
      </ul>
      </div>
@endsection
