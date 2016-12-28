<div class="col-xs-12 content">
    <div class="panel panel-default">
        <div class="panel-heading">
            Formas de Pago
        </div>

        <div class="panel-body">
            {!! Form::open() !!}

            <div class="col-xs-2 form-group">
                {!! Form::label('Monto') !!}
                {!! Form::number('monto' ,null, ['class'=>' form-control']) !!}
            </div>

            <div class="col-xs-4 form-group">
                {!! Form::label('Forma de Pago') !!}
                <select name="modo_financiamiento" class="form-control" id="financials">
                    @foreach($financials as $financial)
                        <optgroup label="{{$financial->name}}">
                            @foreach($financial->FinancialsDues as $dues)
                                <option value="{{$dues->coef}}" due="{{$dues->due}}">
                                    {{$dues->due}} cuota/s
                                </option>
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>
            </div>
            <div class="col-xs-3 form-group">
                {!! Form::label('Nro . Tarjeta') !!}
                {!! Form::text('tarjeta_id', null, ['class'=>' form-control']) !!}
            </div>
            <div class="col-xs-1 form-group">
                {!! Form::label('Cod. Seg.') !!}
                {!! Form::text('cod_seg', null, ['class'=>' form-control']) !!}
            </div>
            <div class="col-xs-1 form-group">
                {!! Form::label('Vto.') !!}
                {!! Form::text('vto', null, ['class'=>' form-control']) !!}
            </div>
            <div class="col-xs-1 form-group" style="padding-top: 1.5%">
                <a href="{{route("moto.clients.create")}}" target="_blank" class="btn btn-default"><span
                            class="fa fa-plus"></span></a>
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
                        <tr>
                            <td>dasdas</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div>