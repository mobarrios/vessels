<!DOCTYPE html>
<html lang="es">
<head>
    <base href="{{asset('')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    @include('template.css')

            <!-- para css extras en cada seccion -->
    @yield('css')

    <link rel="stylesheet" href="vendors/LTE/plugins/iCheck/all.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



    <style>
        .login-page{
            background: grey;
            /*background: -moz-linear-gradient(left, rgba(255,175,75,1) 0%, rgba(255,146,10,1) 100%);*/
            /*background: -webkit-gradient(left top, right top, color-stop(0%, rgba(255,175,75,1)), color-stop(100%, rgba(255,146,10,1)));*/
            /*background: -webkit-linear-gradient(left, rgba(255,175,75,1) 0%, rgba(255,146,10,1) 100%);*/
            /*background: -o-linear-gradient(left, rgba(255,175,75,1) 0%, rgba(255,146,10,1) 100%);*/
            /*background: -ms-linear-gradient(left, rgba(255,175,75,1) 0%, rgba(255,146,10,1) 100%);*/
            /*background: linear-gradient(to right, rgba(255,175,75,1) 0%, rgba(255,146,10,1) 100%);*/
            /*filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffaf4b', endColorstr='#ff920a', GradientType=1 );*/
        }


        .login-logo .fa-shekel{
            color: white !important;
            text-shadow: -3px 3px 5px rgba(0, 0, 0, 0.21)
        }

        .login-logo{
            font-size: 26px;
        }

    </style>
</head>
<body class="hold-transition login-page ">


@yield('mainContent')
        <!-- /.content-wrapper -->
@include('template.js')

</body>

</html>
