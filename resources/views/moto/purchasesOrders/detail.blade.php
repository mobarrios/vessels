<div class="box-body">

    <div class="col-xs-12">
        <h1> Pedido # <strong class="text-blue">{{$models->id}}</strong></h1>
    </div>
    <div class="col-xs-4">
        <p>Fecha : <strong>{{$models->date}}</strong></p>
        <p> Proveedor : <strong>{{$models->Providers->name}}</strong></p>
        <p>Sucursal : <strong>{{$models->Branches->name}}</strong></p>
        <p>Usuario : <strong>{{$models->Users->fullName}}</strong></p>
        <p>Actualización : <strong>{{$models->updated_at}}</strong></p>
    </div>

    <div class="col-xs-8">
        <table class="table">
            <thead>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Cantidad</th>
            <th>$ Lista</th>
            <th>% Dto.</th>
            <th>Color</th>
            <th>S.Total Neto</th>
            <th>Total Dto.</th>
            <th>S.Total</th>


            </thead>
            <tbody>
            <?php $t = 0;?>
            @foreach($models->PurchasesOrdersItems as $item)

                <tr>
                    <td>{{$item->Models->Brands->name}}</td>
                    <td>{{$item->Models->name}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>$ {{number_format($item->price,2)}}</td>
                    <td>% {{$item->discount}}</td>
                    <td>{{$item->colors->name}}</td>
                    <td>$ {{number_format($item->quantity * $item->price, 2)  }}</td>
                    <td>
                        $ {{number_format(((($item->quantity * $item->price) * $item->discount)/100),2 )}}</td>
                    <td class="text-danger">
                        $ {{number_format(($item->quantity * $item->price)  - ((($item->quantity * $item->price) * $item->discount)/100),2) }}</td>
                    <?php $t += ($item->quantity * $item->price) - ((($item->quantity * $item->price) * $item->discount) / 100);?>

                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="col-xs-12">
             <span class="pull-right"><h4>Total : <strong
                    class="text-danger">$ {{number_format($t,2)}}</strong></h4></span>
        </div>
    </div>

</div>






