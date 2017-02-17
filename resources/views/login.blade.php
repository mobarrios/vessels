@extends('template.loginLayout')

    @section('mainContent')
    <div class="login-box">

        <div class="login-logo">
            <a href=""> <span class="fa-stack ">
                <i class="fa fa-shekel fa-stack-2x"></i>
            </span></a>
        </div>
        <div class="login-box-body">

            <div class="login-logo">
                    SISTEMA DE GESTIÓN
            </div>
            <hr>
            <p class="login-box-msg">Por Favor , coloque sus credenciales.</p>

            {!! Form::open(['route'=>'auth.validate']) !!}
                <div class="form-group has-feedback">
                    {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Email']) !!}

                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input  name="password" type="password" class="form-control" placeholder="Password">

                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
            <div class="icheck">
                {!! Form::checkbox('remember') !!} Recordarme
            </div>
            <hr>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-default btn-block"> Ingresar</button>
                </div>
                <!-- /.col -->
            </div>

            @include('template.messages')

            {!! Form::close() !!}

        </div>

    </div>

    @endsection