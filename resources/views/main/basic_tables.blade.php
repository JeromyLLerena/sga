<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <title>Sistema de Gestion de Alertas</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/adventure-time-theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/adventure-time-theme-responsive.css')}}">   
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>       
        <a href="dashboard" class="logo">
          <b class="hidden-xs">SISTEMA DE GESTION DE ALERTAS</b>
          <b class="visible-xs">SGA</b>
        </a>
        <div class="top-menu">
          <ul class="nav pull-right top-menu">
            <li><a class="logout" href="{{route('logout')}}">Logout</a></li>
          </ul>
        </div>
      </header>
      <aside>
        <div id="sidebar"  class="nav-collapse ">
          <ul class="sidebar-menu">
            <p class="text-center">
              <a href="profile">
                <img src="{{asset('/img/profile.jpg')}}" class="img-circle" width="60">
              </a>
            </p>
            <h5 class="text-center">Panel de Control</h5>
            <li class="sub-menu">
              <a href="dashboard">
                <i class="fa fa-dashboard"></i>
                <span>Menu Principal</span>
              </a>
            </li>           
            <li class="sub-menu">
              <a href="form_component" >
                <i class="fa fa-cogs"></i>
                <span>Formulario</span>
              </a>
            </li>
            <li class="sub-menu">
              <a class="active" href="basic_tables" >
                <i class="fa fa-th"></i>
                <span>Datos</span>
              </a>
            </li>            
            <li class="sub-menu">
              <a href="gallery" >
                <i class="fa fa-tasks"></i>
                <span>Galeria</span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="login" >
                <i class="fa fa-book"></i>
                <span>Login Page</span>
              </a>
            </li>            
          </ul>
        </div>
      </aside> 
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
          <h3><i class="fa fa-angle-right"></i> Registro de Alertas</h3>
          <div class="row">
            
            <div class="col-md-12 mt">
              <div class="content-panel">
                <table class="table table-hover">
                  <h4><i class="fa fa-angle-right"></i> Monitor de Alertas</h4>
                  <hr>
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
                    <tr>
                      <td>Accidente automovilistico</td>
                      <td>15-04-2016 <br>6.04pm</td>
                      <td>Comas</td>
                      <td><a href="">Ver</a></td>
                      <td>4</td>
                      <td><span class="label label-warning label-mini">En camino</span></td>
                      <td>Muy Alta</td>
                      <td>..........</td>
                      <td><a href="">Delegar</a> <a href="">Borrar</a></td>
                    </tr>
                    <tr>
                      <td>Accidente automovilistico</td>
                      <td>15-04-2016 <br>6.04pm</td>
                      <td>Independencia</td>
                      <td><a href="">Ver</a></td>
                      <td>5</td>
                      <td><span class="label label-success label-mini">Atendido</span></td>
                      <td>Alta</td>
                      <td>..........</td>
                      <td><a href="">Delegar</a> <a href="">Borrar</a></td>
                    </tr>
                    <tr>
                      <td>Incendio</td>
                      <td>15-04-2016 <br>6.04pm</td>
                      <td>Callao</td>
                      <td><a href="">Ver</a></td>
                      <td>6</td>
                      <td><span class="label label-warning label-mini">En camino</span></td>
                      <td>Muy Alta</td>
                      <td>..........</td>
                      <td><a href="">Delegar</a> <a href="">Borrar</a></td>
                    </tr>
                    <tr>

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
              </div><!--/content-panel -->
            </div><!-- /col-md-12 -->
          </div><!-- row -->

          <div class="row mt">
            <div class="col-md-12">
              <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                  <h4><i class="fa fa-angle-right"></i> Todas</h4>
                  <hr>
                  <thead>
                    <tr>
                      <th><i class="fa fa-bullhorn"></i> Lugar</th>
                      <th class="hidden-phone"><i class="fa fa-question-circle"></i> Detalle</th>
                      <th><i class="fa fa-bookmark"></i> Fecha-Hora</th>
                      <th><i class=" fa fa-edit"></i> Estado</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="basic_table#">Santa Anita</a></td>
                      <td class="hidden-phone">Lorem Ipsum dolor</td>
                      <td>11 Marzo 04:55pm </td>
                      <td><span class="label label-success label-mini">Atendido</span></td>
                    </tr>
                    <tr>
                      <td>
                        <a href="basic_table#">
                          Jesus María
                        </a>
                      </td>
                      <td class="hidden-phone">Lorem Ipsum dolor</td>
                      <td>18 Abril 08:25pm </td>
                      <td><span class="label label-warning label-mini">Accidente menor</span></td>
                    </tr>
                    <tr>
                      <td>
                        <a href="basic_table#">
                          Ate
                        </a>
                      </td>
                      <td class="hidden-phone">Lorem Ipsum dolor</td>
                      <td>15 Febrero 02:44pm </td>
                      <td><span class="label label-success label-mini">Atendida</span></td>
                    </tr>
                    <tr>
                      <td>
                        <a href="basic_table#">
                          Los Olivos
                        </a>
                      </td>
                      <td class="hidden-phone">Lorem Ipsum dolor</td>
                      <td>09 Enero 01:55am </td>
                      <td><span class="label label-success label-mini">Atendida</span></td>
                    </tr>
                    <tr>
                      <td><a href="basic_table#">Comas</a></td>
                      <td class="hidden-phone">Lorem Ipsum dolor</td>
                      <td>07 Abril 06:31am </td>
                      <td><span class="label label-warning label-mini">Accidente menor</span></td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- /content-panel -->
            </div><!-- /col-md-12 -->
          </div><!-- /row -->

        </section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
  </section>

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
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/common-scripts.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>