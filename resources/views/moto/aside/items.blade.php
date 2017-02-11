 {{--@if(isset($modelPays))--}}
        {{--{!! Form::model($modelPays,['route'=> $routePays, 'files' =>'true']) !!}--}}
    {{--@else--}}
        {{--{!! Form::open(['route'=> $routePays, 'files' =>'true']) !!}--}}
    {{--@endif--}}

    @if(array_has(config('models.'.$section.'.asidePays'),'amount'))
        <div class="col-xs-6 form-group">{!! Form::label('Monto') !!}
            {!! Form::number('amount' ,null, ['class'=>' form-control']) !!}
        </div>
    @endif

    @if(array_has(config('models.'.$section.'.asidePays'),'financials_id'))
         <div class="col-xs-6 form-group">
             {!! Form::label('Forma de Pago') !!}
             {!! Form::select('financials_id',$financials ,null, ['class'=> 'select2 form-control']) !!}
          </div>
    @endif

    @if(array_has(config('models.'.$section.'.asidePays'),'ccn'))
        <div class="col-xs-6 form-group">
            {!! Form::label('Nro . Tarjeta') !!}
            {!! Form::text('ccn', null, ['class'=>' form-control']) !!}
        </div>
    @endif

    @if(array_has(config('models.'.$section.'.asidePays'),'ccc'))
        <div class="col-xs-6 form-group">
            {!! Form::label('Cod. Seg.') !!}
            {!! Form::text('ccc', null, ['class'=>' form-control']) !!}
        </div>
    @endif

    @if(array_has(config('models.'.$section.'.asidePays'),'cce'))
        <div class="col-xs-6 form-group">
            {!! Form::label('Vto.') !!}
            {!! Form::text('cce', null, ['class'=>' form-control']) !!}
        </div>
    @endif


<div class="col-xs-12 text-center form-group" style="padding-top: 2%">
    <button type="submit" class="btn btn-primary">Agregar</button>
    <a data-toggle="control-sidebar" class="btn btn-danger">Cancelar</a>
</div>


<script src="js/asideModelsColors.js"></script>
