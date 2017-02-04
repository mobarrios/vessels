@extends('template')

@section('sectionContent')


        <div class="box box-primary">
            <div class="box-header">Honda</div>
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
                    <tr>
                        <td>01-23-2017</td>
                        <td>Deuda</td>
                        <td>Pedido de Mercadería # 19</td>
                        <td></td>
                        <td class="text-danger">$ 50.000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>01-23-2017</td>
                        <td>Pago</td>
                        <td>Pedido de Mercadería # 19</td>
                        <td>
                            Cheque # 123445567 <br>
                            Banco Nacion <br>
                            Fecha Cobro 25-02-2017
                        </td>
                        <td></td>
                        <td>$ 25.000</td>
                    </tr>
                    <tr>
                        <td>01-23-2017</td>
                        <td>Pago</td>
                        <td>Pedido de Mercadería # 19</td>
                        <td>
                            Cheque # 12344312 <br>
                            Banco Nacion <br>
                            Fecha Cobro 15-03-2017
                        </td>
                        <td></td>
                        <td>$ 25.000</td>
                    </tr>
                    </tbody>
                    <tfoot>
                        <td colspan="5">Total</td>
                        <td >$ 25000</td>

                    </tfoot>
                </table>
            </div>

        </div>

@endsection