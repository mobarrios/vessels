@extends('template')


@section('sectionContent')


    <div class="box box-primary ">

        <div class="box-header with-border">
            <span class="box-title"> Artículo Solicitado  </span>
        </div>

            <div class="box-body">
                <p>
                    <strong>
                        <span class="text-muted"> Cod. Artículo: </span>
                        <span class="text-danger">{{$models->items_id}}</span>
                    </strong>
                </p>
                <p>
                    <strong>
                        <span class="text-muted"> Marca / Modelo : </span>
                        <span class="text-danger">{{$models->Items->Models->Brands->name}}
                            / {{$models->Items->Models->name}}</span>
                    </strong>
                </p>
                <p>
                    <strong>
                        <span class="text-muted"> # Motor : </span>
                        <span class="text-danger"> {{$models->Items->n_motor}}</span>
                    </strong>
                </p>
                <p>
                    <strong>
                        <span class="text-muted"> # Cuadro : </span>
                        <span class="text-danger"> {{$models->Items->n_cuadro}}</span>
                    </strong>
                </p>

                <p> Sucursal de ORIGEN : <strong> {{ $models->Items->Branches or '' }}</strong></p>

                <p> Sucursal de DESTINO : <strong>{{ $models->BranchesTo->name or '' }}</strong></p>
                <p> Tipo : <strong>{{ $models->sales->type  or ''}}</strong></p>
            </div>


    </div>

    <div class="box box-primary ">

        <div class="box-header with-border">
            <span class="box-title"> Reasignar Artículo  </span>
        </div>

        <div class="box-body">

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
                    <td><a href="{{route('moto.itemsRequest.reasign', [ $models->id , $item->id ])}}" class=" reasignar btn btn-xs btn-default"><strong>Reasignar</strong></a></td>
                </tr>
                @endforeach
                </tbody>
            </table>


        </div>

    </div>


@endsection


@section('js')
    <script>
        $('.reasignar').on('click',function(){

            if(!confirm('Esta Seguro desear Cambiar El Articulo Indicado ?'))
                return false;
        });
    </script>
@endsection