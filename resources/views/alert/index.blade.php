@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Alerts</h1>
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
                      <th>Tipo</th>
                      <th>Fecha y Lugar</th>
                      <th>Distrito</th>
                      <th>Mapa</th>
                      <th>Personas involucradas</th>
                      <th>Estado de atención</th>
                      <th>Prioridad</th>
                      <th>Detalle</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($alerts as $alert)
                      <td>
                        @if ($alert->IN_ID_TIPO == 1)
                          Incendio
                        @elseif($alert->IN_ID_TIPO == 2)
                         Amenaza de bomba
                        @elseif($alert->IN_ID_TIPO == 3)
                          Accidente automovilístico
                        @endif
                      </td>
                      <td>{{$alert->DT_FECHA}}</td>
                      <td> </td>
                      <td>
                          <a href="#" data-id="{{$alert->IN_ID_ALERTA}}" rel="{{$alert->IN_ID_ALERTA}}" class="alert-map" id="link-alert-{{$alert->IN_ID_ALERTA}}" data-toggle="modal" data-target="#alert_map_modal">
                            Ver
                          </a>
                      </td>
                      <td>{{$alert->VC_NUM_HERIDOS}}</td>
                      <td><span class="label label-danger label-mini">En cola</span></td>
                      <td>Alta</td>
                      <td>..........</td>
                      <td><a href="">Delegar</a> <a href="">Borrar</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>

<!-- Modal -->
<div id="alert_map_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Show map</h4>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>
@stop

@section('extra_scripts')
    <script src="{{asset('js/custom/alert/index.js')}}"></script>
    <script src ="{{asset('js/main.js')}}"></script>
@stop