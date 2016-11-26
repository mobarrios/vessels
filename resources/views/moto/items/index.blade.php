@extends('template.model_index')
    @section('table')
        @foreach($models as $model)
            <tr>
                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                <td>{{$model->id}}</td>
                <td>{{$model->Models->Brands->name }} <strong>{{$model->Models->name }}</strong></td>
                <td>{{$model->year}}</td>
                <td>{{$model->Colors->name}}</td>
                <td>Motor:  <strong >{{$model->n_motor}}</strong> <br>
                    Cuadro:  <strong >{{$model->n_cuadro}}</strong></td>
                <td>
                    @foreach($model->Brancheables as $branch)
                       <label class="label label-default"> {{$branch->branches->name}} </label>
                    @endforeach
                </td>
                <td>

                    @if(!is_null($model->Certificates) && $model->Certificates->count() != 0)
                         <a href="{{route('moto.certificates.edit',$model->id)}}" class="btn btn-sm btn-success" title="certificados"><span class="fa fa-certificate"></span></a>
                    @else
                        <a href="{{route('moto.certificates.create',$model->id)}}" class="btn btn-sm btn-default" title="certificados"><span class="fa fa-certificate"></span></a>
                    @endif
                </td>


            </tr>
        @endforeach
    @endsection