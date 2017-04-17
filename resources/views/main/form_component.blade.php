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
    <link rel="stylesheet" href="{{asset('css/adventure-time-theme-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/adventure-time-theme.css')}}">
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
              <a class="active" href="form_component" >
                <i class="fa fa-cogs"></i>
                <span>Formulario</span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="basic_tables" >
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
          <h3><i class="fa fa-angle-right"></i> Formulario de Registro</h3>
          
          <!-- BASIC FORM ELELEMNTS -->
          <div class="row mt">
            <div class="col-lg-12">
              <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Ver Detalle</h4>
                <form class="form-horizontal style-form" method="get">
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Codigo</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Lugar</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Lugar</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control round-form">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Fecha</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="focusedInput" type="text" value="Fecha">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Referencia</label>
                    <div class="col-sm-10">
                      <input type="text"  class="form-control" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Estacion</label>
                    <div class="col-sm-10">
                      <input type="password"  class="form-control" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label">E-mail de Control</label>
                    <div class="col-lg-10">
                      <p class="form-control-static">atencion@sga.com</p>
                    </div>
                  </div>
                </form>
              </div>
            </div><!-- col-lg-12-->       
          </div><!-- /row -->
          
          

          
          <!-- INPUT MESSAGES -->
          <div class="row mt">
            <div class="col-lg-12">
              <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Tiempo de Auxilio Estimado</h4>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    10-15 min
                  </label>
                </div>           
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    15-20 min
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    20-30 min
                  </label>
                </div>          
              </div><!-- /form-panel -->
            </div><!-- /col-lg-12 -->
      </div><!-- /row -->
      
      
    </section><!--/wrapper -->
  </section><!-- /MAIN CONTENT -->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/common-scripts.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>  
  </body>
</html>