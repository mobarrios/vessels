@extends('template.model_form')

@section('form_title')
    Asignar Artículo
@endsection

@section('form_inputs')

            <table class="table">
                <thead>
                <th>Cod.</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Motor</th>
                <th>Cuadro</th>
                <th>Color</th>
                <th>Año</th>
                <th>Sucursal</th>
                <th>F.Ingreso</th>
                <th>Estado</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->Models->Brands->name}}</td>
                        <td>{{$item->Models->name}}</td>
                        <td>{{$item->n_motor}}</td>
                        <td>{{$item->n_cuadro}}</td>
                        <td>{{$item->Colors->name}}</td>
                        <td>{{$item->year}}</td>
                        <td>{{$item->Branches}}</td>
                        <td>{{$item->created_at}}</td>
                        <td><label class="label label-info">{{$item->statusName}}</label></td>
                        <td><a href="{{route('moto.itemsRequest.postAsign', [ $item->id , $branchesTo, $myRequestId] )}}" class="reasignar btn btn-xs btn-default"><strong>Asignar</strong></a></td>
                   </tr>
                @endforeach
                </tbody>
            </table>



@endsection



