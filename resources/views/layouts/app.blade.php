<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>
        @section('title', 'SISTEMA DE GESTIÓN DE ALERTAS')
        </title>
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/sb-admin-2/metisMenu.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/sb-admin-2/sb-admin-2.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/sb-admin-2/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/bootstrap-datepicker.css')}}" rel="stylesheet" type="text/css">

        @yield('extra_css')
    </head>

    @section('body_tag')
    <body>
        @show
        <div id="wrapper">
            @include('layouts.navigation')
            <div id="page-wrapper" class="container-fluid">
                @yield('content')
            </div>
        </div>
        <script src ="{{asset('js/jquery.min.js')}}"></script>
        <script src ="{{asset('js/bootstrap.min.js')}}"></script>
        <script src ="{{asset('js/sb-admin-2/metisMenu.min.js')}}"></script>
        <script src ="{{asset('js/sb-admin-2/sb-admin-2.js')}}"></script>
        <script src ="{{asset('js/jquery.dataTables.min.js')}}"></script>
        <script src ="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
        <script src ="{{asset('js/bootstrap-datepicker.js')}}"></script>

        @yield('extra_scripts')
    </body>
</html>