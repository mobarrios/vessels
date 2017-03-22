<div class="col-xs-12" id="adicionales">
    <h4>Adicionales</h4>
    <div class="input-group">


        <div class="input-group-btn" style="font-size: 12px !important;">
            {!! Form::select('models_id',$modelos,null,['class' => 'btn btn-default select2']) !!}
        </div>

        <div class="input-group-btn" style="font-size: 12px !important;">
            {!! Form::select('additionals_id',$additionals,null,['class' => 'btn btn-default select2']) !!}
        </div><!-- /btn-group -->
        {!! Form::number('amount',null,['class' => 'form-control','placeholder' => '$']) !!}
        {!! Form::hidden('entity',$section) !!}
        {!! Form::hidden('_token',csrf_token()) !!}
        <div class="input-group-btn">
            <button type="button" class="btn btn-default saveAdicionales">
                <i class="fa fa-floppy-o"></i>
            </button>
        </div>
    </div><!-- /input-group -->

    <table class="table adicionales">

        @foreach($models->additionables as $additionals)
            <tr>
                <td class="text-center">{{$additionals->Additionals->name or ''}}</td>
                <td class="text-center"> $ {{$additionals->amount or ''}}</td>
                <td>
                    <div class="btn-group pull-right">
                        <a href="{!! url('moto/removeAdditionals',$additionals->id) !!}" class="btn btn-xs btn-danger" data-id="{!! $additionals->id !!}"><i class="fa fa-trash"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
</div>


