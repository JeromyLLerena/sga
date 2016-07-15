@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">NUevo usuario</h1>
        </div>
            <!-- /.col-lg-12 -->
    </div>
        <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                        Información básica
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{route('app.firemans.create')}}">
                        {!! csrf_field() !!}
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-4 col-lg-offset-4">
                                    <div class="form-group">
                                        ID de usuario
                                        <input class="form-control" placeholder="id" name="id" type="text" autofocus value="{{old('id')}}">
                                    </div>
                                    <div class="form-group">
                                        Nombre
                                        <input class="form-control" placeholder="nombre" name="name" type="text" autofocus value="{{old('name')}}">
                                    </div>
                                    <div class="form-group">
                                        Apellidos
                                        <input class="form-control" placeholder="apellidos" name="last_name" type="text" autofocus value="{{old('last_name')}}">
                                    </div>
                                    <div class="form-group">
                                        Teléfono
                                        <input class="form-control" placeholder="telef" name="phone" type="text" autofocus value="{{old('phone')}}">
                                    </div>
                                    <div class="form-group">
                                        Fecha de nacimiento
                                        <div class="input-group date" data-provide="datepicker">
                                            <input type="text" class="form-control" id="datepicker1" name="birthdate">
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        Dirección
                                        <input class="form-control" placeholder="direccion" name="direction" type="text" autofocus value="{{old('direction')}}">
                                    </div>
                                    <div class="form-group">
                                        DNI
                                        <input class="form-control" placeholder="" name="dni" type="text" autofocus value="{{old('dni')}}">
                                    </div>
                                    <div class="form-group" name="charge">
                                        Cargo
                                        <select class="form-control" name="charge">
                                            @foreach($charges as $charge)
                                                <option value="{{$charge->IN_ID_CARGO}}">{{$charge->VC_NOMBRE}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        Email
                                        <input class="form-control" placeholder="example@domain.com" name="email" type="email" autofocus value="{{old('email')}}">
                                    </div>
                                    <div class="form-group">
                                        Contraseña
                                        <input class="form-control" id="password" name="password" type="password">
                                    </div>
                                    <div class="form-group">
                                        Repetir contraseña
                                        <input class="form-control" id="password_confirmation" name="password_confirmation" type="password">
                                    </div>
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                            </div>
                             <!-- /.row (nested) -->
                            <div class="row col-lg-4 col-lg-offset-4">
                                <div class="col-md-8">
                                     <button type="submit" class="btn btn-success" name ="create" id="submit">
                                        Crear nuevo usuario
                                     </button>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{route('app.firemans.index')}}" class="btn btn-default">Cancelar</a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <!-- /.panel-body -->
            </div>

        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@stop

@section('extra_scripts')

@stop
