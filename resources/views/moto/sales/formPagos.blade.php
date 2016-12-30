<div class="col-xs-12 content">
    <div class="panel panel-default">
        <div class="panel-heading">
            Formas de Pago
        </div>

        <div class="panel-body">
            @if(isset($models))
                {!! Form::model($models,['route'=> ['moto.sales.addPayment', $models->id] , 'files' =>'true']) !!}
                {!! Form::hidden('sales_id',$models->id) !!}
                {!! Form::hidden('date', Date('Y-m-d')) !!}

            @else
                {!! Form::open(['route'=> 'moto.sales.editPayment' , 'files' =>'true']) !!}
            @endif

            <div class="col-xs-2 form-group">
                {!! Form::label('Monto') !!}
                {!! Form::number('amount' ,null, ['class'=>' form-control']) !!}
            </div>

            <div class="col-xs-4 form-group">
                {!! Form::label('Forma de Pago') !!}
                <select name="financials_id" class="form-control" id="financials">
                    @foreach($financials as $financial)
                        <optgroup label="{{$financial->name}}">
                            @foreach($financial->FinancialsDues as $dues)
                                <option value="{{$financial->id}}" due="{{$dues->due}}">
                                    {{$dues->due}} cuota/s
                                </option>
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>
            </div>
            <div class="col-xs-3 form-group">
                {!! Form::label('Nro . Tarjeta') !!}
                {!! Form::text('ccn', null, ['class'=>' form-control']) !!}
            </div>
            <div class="col-xs-1 form-group">
                {!! Form::label('Cod. Seg.') !!}
                {!! Form::text('ccc', null, ['class'=>' form-control']) !!}
            </div>
            <div class="col-xs-1 form-group">
                {!! Form::label('Vto.') !!}
                {!! Form::text('cce', null, ['class'=>' form-control']) !!}
            </div>
            <div class="col-xs-1 form-group" style="padding-top: 1.5%">
                <button type="submit" class="btn btn-default"><span
                            class="fa fa-plus"></span></button>
            </div>


            {!! Form::close() !!}


            <div class="col-xs-12">
                <table class="table table-bordered">
                    <thead>
                        <th>Fecha</th>
                        <th>Forma de Pago</th>
                        <th> $ Monto</th>
                    </thead>
                    <tbody>
                    <?php $pago = 0 ?>
                    @if(isset($models->SalesPayments))

                        @foreach($models->SalesPayments as $payment)
                            <tr>
                                <td>{{$payment->date}}</td>
                                <td>{{$payment->Financials}}</td>
                                <td> $ {{number_format($payment->amount, 2)}}</td>
                                <?php  $pago += $payment->amount ;?>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                        <tfoot>
                             <td colspan="3" align="right">TOTAL PAGO :  <b class="text-danger"> $ {{number_format($pago,2)}}</b> </td>
                        </tfoot>
                </table>
            </div>

        </div>

    </div>
</div>