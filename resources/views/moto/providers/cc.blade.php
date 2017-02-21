@extends('template')

@section('sectionContent')

        <div class="box box-primary">
            <div class="box-header">{{$models->name}}</div>
            <div class="box-body">

                <table class="table table-bordered">
                    <thead>
                    <th>Fecha</th>
                    <th>Tipo</th>
                    <th>Descripcion</th>
                    <th>Detalle</th>

                    <th>Debe</th>
                    <th>Haber</th>
                    </thead>
                    <tbody>
                        @foreach($models->PurchasesOrders as $purchase)
                        <tr>
                            <td>{{$purchase->date}}</td>
                            <td>Deuda</td>
                            <td>Pedido de Mercadería # {{$purchase->id}}</td>
                            <td></td>
                            <td class="text-danger">$ {{$purchase->PurchasesOrdersItems->sum('price')}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                        @foreach($models->PurchasesOrders as $purchase)
                            <tr>
                                <td>{{$purchase->date}}</td>
                                <td>Deuda</td>
                                <td>Pedido de Mercadería # {{$purchase->id}}</td>
                                <td></td>
                                <td class="text-danger">$ {{$purchase->PurchasesOrdersItems->sum('price')}}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <td colspan="5">Total</td>
                        <td >$ 25000</td>

                    </tfoot>
                </table>
            </div>

        </div>

@endsection