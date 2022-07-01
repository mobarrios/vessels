@extends('template.model_form')

    @section('form_title')
        New On Hire Stocks
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
        @endif

            <div class="col-xs-12">
              <strong>Sectors</strong>
                <table class="table">
                  <thead>
                    {{-- <th>#</th> --}}
                    <th>Name</th>
                    <th>Cap.Max </th>
                    <th colspan="2">Types Available</th>
                    {{-- <th>Actual Cap.</th> --}}
                  </thead>
                  <tbody>
                  @if(isset($models))
                    @foreach ($models->ServicesCargo as $cargo)
                      <tr>
                      {{-- <td>{{$cargo->sectors_id}}</td> --}}
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
                        <input type="number" name="actualCap[{{$cargo->id}}]" value="{{$cargo->quantity}}" >
                      </td>
                     </tr>
                    @endforeach
                  @else
                    @foreach ($services->Vessels->Sectors as $sector)
                      <tr>
                      {{-- <td>{{$sector->id}}</td> --}}
                      <td>{{$sector->name}}</td>
                      <td>{{$sector->capacities}} <small> {{$sector->um}} </small></td>
                            <td>
                               <select  name="actualCapType[{{$sector->id}}]">
                                    @foreach($sector->CargoTypes as $type)
                                      <option value={{$type->id}}>{{$type->name}}</option>
                                    @endforeach
                              </select>

                            </td>
                            <td>
                             <input type="number" name="actualCap[{{$sector->id}}]" >
                            </td>
                     </tr>
                    @endforeach
                  @endif
                  </tbody>
                </table>
          </ul>
          </div>



@endsection
