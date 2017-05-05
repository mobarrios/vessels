@extends('template')

@section('sectionContent')

    <div class="box box-default">
        <div class="box header"></div>

        <div class="box-body">

            <table class="table table-bordered">
                <th>#</th>
                <th>Tipo</th>
                <th>Marca Modelo</th>
                <th>Color</th>
                <th>Datos</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($purchasesOrders as $item)
                    @foreach($item->DispatchesItems as $dispatchesItem)
                        @if(is_null($dispatchesItem->dispatches_id))
                        <tr>
                            <td>{{$dispatchesItem->id}}</td>
                            <td>{{$dispatchesItem->PurchasesOrdersItems->Models->TypesName}}</td>
                            <td>{{$dispatchesItem->PurchasesOrdersItems->Models->Brands->name}}
                                : {{$dispatchesItem->PurchasesOrdersItems->Models->name}}
                                </td>
                            <td>{{$dispatchesItem->PurchasesOrdersItems->Colors->name}} </td>


                            @if($dispatchesItem->PurchasesOrdersItems->Models->types_id == 1)
                                <td><input class="m{{$dispatchesItem->id}}" type="text" placeholder="N Motor"> <input
                                            class="c{{$dispatchesItem->id}}" type="text" placeholder="N Cuadro">
                                </td>
                            @else
                                <td><input type="text" placeholder="Talle" class="t{{$dispatchesItem->id}}"></td>
                            @endif

                            <td>
                                <button data-id="{{$dispatchesItem->id}}" class="add btn btn-xs"
                                        data-models-id="{{$dispatchesItem->PurchasesOrdersItems->models_id}}"
                                        data-colors-id="{{$dispatchesItem->PurchasesOrdersItems->colors_id}}"
                                        data-dispatches-id="{{$dispatchesId}}">Asignar a Remito</button>
                            </td>
                        </tr>
                        @endif
                    @endforeach

                @endforeach
                </tbody>
            </table>

        </div>

        <div class="box-footer"></div>
    </div>

@endsection

@section('js')
    <script>
        $('.add').on('click', function () {

            var id = $(this).attr('data-id');
            var n_motor = $('.m' + id).val();
            var n_cuadro = $('.c' + id).val();
            var talle = $('.t' + id).val();

            var models_id = $(this).attr('data-models-id');
            var colors_id = $(this).attr('data-colors-id');

            var dispatches_id = $(this).attr('data-dispatches-id');

            if (n_motor == '' || n_cuadro == '') {
                if (!n_motor == "") {

                    //valida nmotor unique
                    $.get("moto/items/findMotor/" + n_motor)
                            .then(function (response) {
                                if (response.data)
                                    alert('El Nro. de MOTOR ya se encuentra ingresado');
                            });

                } else {
                    alert('N Motor Requerido');
                }

                if (!n_cuadro == "") {
                    //valida nmotor unique
                    $.get("moto/items/findCuadro/" + n_cuadro)
                            .then(function (response) {
                                if (response.data)
                                   alert('El Nro. de CUADRO ya se encuentra ingresado');
                            });
                }
                else {
                    alert('N Cuadro Requerido');
                }
            }
            else {

                $.get("moto/dispatches/addNew", {
                    ajax: true,
                    n_motor: n_motor,
                    n_cuadro: n_cuadro,
                    talle : talle,
                    models_id: models_id,
                    colors_id: colors_id,
                    dispatches_id: dispatches_id,
                    dispatches_items_id: id,

                }).success(function (data) {
                    window.location.href = "moto/dispatches/edit/" + dispatches_id;

                });
            }

        });
    </script>
@endsection


