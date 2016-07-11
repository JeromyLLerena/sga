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
                      </ul>)
        </div>
      </header>
      <aside>
        <div id="sidebar"  class="nav-collapse ">
          <ul class="sidebar-menu">
            <p class="text-center">
              <a href="profile">
                <img src="{{asset('img/profile.jpg')}}" class="img-circle" width="60">
              </a>
            </p>
            <h5 class="text-center">Panel de Control</h5>
            <li class="sub-menu">
              <a class="active" href="dashboard">
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
        <section class="wrapper site-min-height">
          <div class="row">
            <div class="col-md-12 main-chart pt-25">
              <div class="row">
                <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  <div class="box1">
                    <span class="fa fa-android"></span>
                    <h3>933</h3>
                  </div>
                  <p>933 descargas de la aplicación en las últimas 24 hrs!</p>
                </div>
                <div class="col-md-2 col-sm-2 box0">
                  <div class="box1">
                    <span class="fa fa-bell"></span>
                    <h3>+0</h3>
                  </div>
                  <p>0 alertas para atender.</p>
                </div>
                <div class="col-md-2 col-sm-2 box0">
                  <div class="box1">
                    <span class="fa fa-envelope"></span>
                    <h3>23</h3>
                  </div>
                  <p>23 mensajes por leer.</p>
                </div>
                <div class="col-md-2 col-sm-2 box0">
                  <div class="box1">
                    <span class="fa fa-slack"></span>
                    <h3>+10</h3>
                  </div>
                  <p>10 nuevos mensajes en slack.</p>
                </div>
                <div class="col-md-2 col-sm-2 box0">
                  <div class="box1">
                    <span class="fa fa-database"></span>
                    <h3>OK!</h3>
                  </div>
                  <p>La base de datos funciona correctamente!</p>
                </div>
              </div><!-- /row mt -->  
              <div class="page-header">
                <h1>Inicio</h1>
              </div>
              <div class="main-video row">
                <div class="col-lg-7">
                  <div class="video">
                    <iframe width="100%" height="265" src="https://www.youtube.com/embed/1iIzP8Z-tnc" frameborder="0" allowfullscreen></iframe>    
                  </div>
                </div>
                <div class="col-lg-5">
                  <h4>Manejo del Sistema de Gestion de Alertas</h4>
                  <p>Video que muestra el uso del sistema de gestión de alertas.<br>30Marzo de 2016</p>
                  <div class="buttons">
                    <a href="#">
                      <i class="fa fa-plus"></i>
                      <span>Agregar</span>
                    </a>
                    <a href="#">
                      <i class="fa fa-share-alt"></i>
                      <span>Compartir</span>
                    </a>
                    <a href="#">
                      <i class="fa fa-ellipsis-h"></i>
                      <span>Más</span>
                    </a>
                  </div>
                </div>
              </div>
              <hr class="divider"></hr>
              <div class="showback">
                <h4>Recibidas Hoy</h4>
                <div class="row">
                  <div class="col-md-4">
                    <div>
                      <img class="img-responsive"src="{{asset('img/incendio.jpg')}}" alt="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div>
                      <img class="img-responsive"src="{{asset('img/incendio2.png')}}" alt="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div>
                      <img class="img-responsive"src="{{asset('img/incendio.jpg')}}" alt="">
                    </div>
                  </div>
                </div>                
              </div>
              <div class="showback">
                <h4>Videos recientes</h4>
                <div class="row">
                  <div class="col-md-4">
                    <iframe width="100%" height="143" src="https://www.youtube.com/embed/k6hlTz347gQ" frameborder="0" allowfullscreen></iframe>
                  </div>
                  <div class="col-md-4">
                    <iframe width="100%" height="143" src="https://www.youtube.com/embed/1iIzP8Z-tnc" frameborder="0" allowfullscreen></iframe>
                  </div>
                  <div class="col-md-4">
                    <iframe width="100%" height="143" src="https://www.youtube.com/embed/PfemA8HEY28" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>              
              </div>                            
            </div>
            
           
          </div>
        </section>
      </section>
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('/js/jquery.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/common-scripts.js')}}"></script>
  </body>
</html>