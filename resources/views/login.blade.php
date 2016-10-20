@extends('template.layout')

    @section('mainContent')
    <div class="login-box">
            <div class="login-logo">
                <a href=""><b>Admin</b></a>
            </div>
        <div class="login-box-body">
            <p class="login-box-msg">Iniciar Session</p>

            {!! Form::open(['route'=>'auth.validate']) !!}
                <div class="form-group has-feedback">
                    {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Email']) !!}

                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input  name="password" type="password" class="form-control" placeholder="Password">

                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class=" icheck">
                            <label>
                                {!! Form::checkbox('remember') !!} Recordarme
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            {!! Form::close() !!}


        </div>
        <hr>
        @include('template.messages')

    </div>

    @endsection