@extends('template.model_form')

    @section('form_title')
        Nuevo Estado
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'),$models->id]]) !!}
        @else
            {!! Form::open(['route'=>config('models.'.$section.'.storeRoute')]) !!}
        @endif

        <div class="col-xs-12 form-group">
          {!! Form::label('Descripción') !!}
          {!! Form::text('description', null, ['class'=>'form-control']) !!}
          
        </div>
        <div class="col-xs-12 form-group">
          <!-- Color Picker -->
          <div class="form-group">
            <label>Color</label>
            <div class="input-group my-colorpicker1 colorpicker-element'">
              {!! Form::text('color', null, ['class'=>'form-control ']) !!}
              <div class="input-group-addon">
                <i></i>
              </div>
            </div>
            <!-- /.input group -->
          </div>
        </div>
    
        <div class="col-xs-12 form-group">
          {!! Form::label('Texto Email') !!}
          {!! Form::textarea('text_email', null, ['class'=>'form-control textarea']) !!}
        </div>
        
        <div class="col-xs-12 form-group">
          {!! Form::checkbox('enviar') !!}
          {!! Form::label('Enviar email al Cliente') !!}            
        </div>

         <div class="col-xs-12 form-group">
          {!! Form::checkbox('enviar_remito') !!}
          {!! Form::label('Enviar remito al Cliente') !!}            
        </div>

         <div class="col-xs-12 form-group">
          {!! Form::checkbox('confirmar_cliente') !!}
          {!! Form::label('Confirmar cliente') !!}            
        </div>

@endsection


@section('js')
  <script>
    $('.my-colorpicker1').colorpicker()
    $('.textarea').wysihtml5()
  </script>
@endsection
