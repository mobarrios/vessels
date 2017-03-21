@extends('template')
@section('sectionContent')
    <div class="row">
        <!-- Default box -->
        <div class="col-xs-12">
            <div class="box">

                <div class="box-header with-border">
                    <h3 class="box-title">Agregar Pago</h3>
                </div>

                @if(isset($models))
                    {!! Form::model($models,['route' => [config('models.'.$section.'.updatePayMethodsRoute')],'method' => 'post']) !!}
                @else
                    {!! Form::open(['route' => 'moto.sales.addPayment','method' => 'post']) !!}
                @endif

                {!! Form::hidden('sales_id', $salesId) !!}

                {!! Form::hidden('date', Date('Y-m-d')) !!}

                <div class="col-xs-4 form-group">
                    {!! Form::label('Monto') !!}
                    {!! Form::number('amount' ,null, ['class'=>' form-control']) !!}
                </div>

                <div class="col-xs-8 form-group">
                    {!! Form::label('Forma de Pago') !!}
                    {!! Form::select('pay_methods_id',$payments ,null, ['class'=> ' select2 form-control','id'=>'payMethods' ,'placeholder'=>'Seleccionar']) !!}
                </div>



                <div id="number" class="hidden col-xs-3 form-group">
                    {!! Form::label('Nro.') !!}
                    {!! Form::text('number', null, ['class'=>' form-control']) !!}
                </div>
                <div id="bank" class="hidden col-xs-3 form-group">
                    {!! Form::label('Banco') !!}
                    {!! Form::select('banks_id', $banks,null,  ['class'=>' form-control']) !!}
                </div>

                <div id="cheques" class="hidden" >
                    <div class="col-xs-3 form-group">
                        {!! Form::label('Fecha Cheque') !!}
                        {!! Form::text('check_date', null, ['class'=>'datePicker form-control']) !!}
                    </div>
                    <div class="col-xs-3 form-group">
                        {!! Form::label('Fecha Cobro') !!}
                        {!! Form::text('check_pay_date', null, ['class'=>'datePicker form-control']) !!}
                    </div>
                    <div class="col-xs-3 form-group">
                        {!! Form::label('Tipo') !!}
                        {!! Form::select('check_types_id', $checkTypes, null,['class'=>' form-control']) !!}
                    </div>
                </div>

                <div id="plazo" class="hidden col-xs-4 form-group">
                    {!! Form::label('Plazo') !!}
                    {!! Form::text('term', null, ['class'=>' form-control']) !!}
                </div>

                <div id="depositos" class="hidden">
                    <div class="col-xs-4 form-group">
                        {!! Form::label('Fecha Transferencia') !!}
                        {!! Form::text('transf_date', null, ['class'=>'datePicker form-control']) !!}
                    </div>
                </div>

                <div id="creditos" class="hidden">

                    <div class="col-xs-4 form-group">
                        {!! Form::label('Financiera') !!}
                        {!! Form::select('financials_id', $financials,null, ['class'=>' form-control']) !!}
                    </div>

                </div>


                <div class="box-footer clearfix">
                    <div class="col-xs-12 text-center form-group" style="padding-top: 2%">
                        <button type="submit" class="btn btn-default">Agregar</button>
                        <a href="{!! \Illuminate\Support\Facades\URL::previous() !!}" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script src="js/asideModelsColors.js"></script>

    <script>


        $('#payMethods').on('change', function()
        {

            var id  = $(this).val();



            if(id == 1){
                $('#cheques').addClass('hidden');
                $('#tarjetas').addClass('hidden');
                $('#depositos').addClass('hidden');
                $('#creditos').addClass('hidden');
                $('#number').addClass('hidden');
                $('#bank').addClass('hidden');
                $('#plazo').addClass('hidden');


            }
            if(id == 2){
                $('#number').removeClass('hidden');
                $('#bank').removeClass('hidden');
                $('#cheques').removeClass('hidden');

                $('#plazo').addClass('hidden');
                $('#tarjetas').addClass('hidden');
                $('#depositos').addClass('hidden');
                $('#creditos').addClass('hidden');

            }
            if(id == 3 || id == 4 ){

                $('#tarjetas').removeClass('hidden');
                $('#number').removeClass('hidden');
                $('#bank').removeClass('hidden');
                $('#plazo').removeClass('hidden');


                $('#cheques').addClass('hidden');
                $('#depositos').addClass('hidden');
                $('#creditos').addClass('hidden');
            }
            if(id == 5 || id == 6){

                $('#depositos').removeClass('hidden');
                $('#bank').removeClass('hidden');
                $('#number').removeClass('hidden');

                $('#plazo').addClass('hidden');
                $('#cheques').addClass('hidden');
                $('#tarjetas').addClass('hidden');
                $('#creditos').addClass('hidden');
            }
            if(id == 7){
                $('#creditos').removeClass('hidden');
;
                $('#bank').addClass('hidden');
                $('#number').removeClass('hidden');
                $('#plazo').removeClass('hidden');


                $('#cheques').addClass('hidden');
                $('#tarjetas').addClass('hidden');
                $('#depositos').addClass('hidden');
            }

        });

    </script>

@endsection
