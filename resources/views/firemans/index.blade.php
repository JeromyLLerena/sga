@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Bomberos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            @if (count($errors) > 0)
                <div>
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="table-alerts" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nombre</th>
                      <th>Apellidos</th>
                      <th>DNI</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                    @endforeach
                  </tbody>
                </table>
            </div>
            <a href="{{route('app.firemans.create')}}" class="btn  btn-primary pull-right">
              Nuevo usuario
            </a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
@stop

@section('extra_scripts')
    <script src="{{asset('js/custom/alert/index.js')}}"></script>
    <script src ="{{asset('js/main.js')}}"></script>
@stop