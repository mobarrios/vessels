@extends('template.model_form')

    @section('form_title')
        Nueva Sucursal
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [$config->updateRoute,$models->id]]) !!}
        @else
            {!! Form::open(['route'=> $config->storeRoute]) !!}
        @endif

            <div class="col-xs-12 form-group">
              {!! Form::label('Nombre') !!}
              {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Dirección') !!}
                {!! Form::text('address', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Telefono') !!}
                {!! Form::text('phone', null, ['class'=>'form-control']) !!}
            </div>

            <div class="col-xs-6 form-group">
                {!! Form::label('Usuarios') !!}

                <table class="table ">
                    @foreach($users as $user)
                        <tr>
                            <td>
                                @if(isset($models))
                                     <input type="checkbox"  name="users_id_checkbox[]"  checked value="{{$user->id}}">
                                @else
                                     <input type="checkbox"  name="users_id_checkbox[]"   value="{{$user->id}}">
                                @endif
                            </td>
                            <td> {{$user->fullName}} </td>
                        </tr>
                    @endforeach
                </table>
                </div>

@endsection

