@extends('template.model_index')
@section('table')
    @foreach($models as $model)
    
        <tr>

            <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
            <td> Cod: {{ $model->id }} </td>

            <td> {{ !empty($model->dni) ? 'DNI '.$model->dni : '' }} </td>

            <td>{{$model->last_name}} {{$model->name }}</td>
            {{--
            <td>{{$model->address}}, {{ isset($model->Localidades->name) ? $model->Localidades->name  : ''}}  {{$model->Localidades->Municipios->name or ''}} , {{$model->Localidades->Municipios->Provincias->name or ''}}</td>
            --}}


            <td>tel. {{$model->phone1}} <br> tel. {{$model->phone2}}</td>
            <td>{{$model->email}}</td>
            <td>
                <div class="btn-group">
                        {{--<a href="{{route('admin.budgets.create',$model->id)}}" class="btn btn-default"><span class="fa fa-file-o"></span></a>--}}
                    @if($model->budgets->count() > 0)
                    <a href="{{route('admin.budgets.indexProspectos',$model->id)}}" class="btn btn-default"><span class="fa fa-file-text-o"></span></a>
                    @endif

                </div>
            </td>
            <td><a href="{{route('admin.orders.create', $model->id)}}" class="btn btn-default btn-xs"><i class="fa fa-plus"></i> Nueva orden</a></td>


    @endforeach
@endsection