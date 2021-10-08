@extends('template.model_form')

    @section('form_title')
        Impresión letra chica
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'),$models->id]]) !!}
        @else
            {!! Form::open(['route'=>config('models.'.$section.'.storeRoute')]) !!}
        @endif
        <!-- /.box-header -->
        <div class="box-body pad">
            {!! Form::textarea('descripcion', null ,[ 'class' => 'textarea', 'style' => 'width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;' ]) !!}
        </div>            
    @endsection
@section('js')

<script>
  $(function () {
  
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>

@endsection
