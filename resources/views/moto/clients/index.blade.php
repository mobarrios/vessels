@extends('template.model_index')
    @section('table')
        @foreach($models as $model)
            <tr>

                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                <td>{{$model->dni}}</td>
                <td class="col-xs-1">
                    <div class="image">
                        <img src="{{$model->images()->first()['path']}}" class="img-rounded" alt="Imagen" width="60px" >
                    </div>
                </td>
                <td>{{$model->last_name}} {{$model->name }}</td>
                <td>{{$model->address}}</td>
                <td>tel. {{$model->phone1}} <br> tel. {{$model->phone2}}</td>
                <td>{{$model->email}}</td>

        @endforeach
    @endsection