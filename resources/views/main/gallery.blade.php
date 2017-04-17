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
    <title>Adventure time: Dashboard</title>
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
              <a class="active" href="gallery" >
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
          <h3><i class="fa fa-angle-right"></i> Gallery</h3>
          <hr>
          <div class="row mt">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
              <div class="project-wrapper">
                <div class="project">
                  <div class="photo-wrapper">
                    <div class="photo">
                      <a class="fancybox" href="{{asset('img/portfolio/port04.jpg')}}"><img class="img-responsive" src="{{asset('/img/portfolio/port04.jpg')}}" alt=""></a>
                    </div>
                    <div class="overlay"></div>
                  </div>
                </div>
              </div>
            </div><!-- col-lg-4 -->

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
              <div class="project-wrapper">
                <div class="project">
                  <div class="photo-wrapper">
                    <div class="photo">
                      <a class="fancybox" href="{{asset('img/portfolio/port05.jpg')}}"><img class="img-responsive" src="{{asset('/img/portfolio/port05.jpg')}}" alt=""></a>
                    </div>
                    <div class="overlay"></div>
                  </div>
                </div>
              </div>
            </div><!-- col-lg-4 -->

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
              <div class="project-wrapper">
                <div class="project">
                  <div class="photo-wrapper">
                    <div class="photo">
                      <a class="fancybox" href="{{asset('img/portfolio/port06.jpg')}}"><img class="img-responsive" src="{{asset('/img/incendio.jpg')}}" alt=""></a>
                    </div>
                    <div class="overlay"></div>
                  </div>
                </div>
              </div>
            </div><!-- col-lg-4 -->
          </div><!-- /row -->

          <div class="row mt">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
              <div class="project-wrapper">
                <div class="project">
                  <div class="photo-wrapper">
                    <div class="photo">
                      <a class="fancybox" href="{{asset('img/portfolio/port01.jpg')}}"><img class="img-responsive" src="{{asset('/img/portfolio/port01.jpg')}}" alt=""></a>
                    </div>
                    <div class="overlay"></div>
                  </div>
                </div>
              </div>
            </div><!-- col-lg-4 -->

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
              <div class="project-wrapper">
                <div class="project">
                  <div class="photo-wrapper">
                    <div class="photo">
                      <a class="fancybox" href="{{asset('img/portfolio/port02.jpg')}}"><img class="img-responsive" src="{{asset('/img/portfolio/port02.jpg')}}" alt=""></a>
                    </div>
                    <div class="overlay"></div>
                  </div>
                </div>
              </div>
            </div><!-- col-lg-4 -->

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
              <div class="project-wrapper">
                <div class="project">
                  <div class="photo-wrapper">
                    <div class="photo">
                      <a class="fancybox" href="{{asset('img/portfolio/port03.jpg')}}"><img class="img-responsive" src="{{asset('/img/portfolio/port03.jpg')}}" alt=""></a>
                    </div>
                    <div class="overlay"></div>
                  </div>
                </div>
              </div>
            </div><!-- col-lg-4 -->
          </div><!-- /row -->

          <div class="row mt mb">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
              <div class="project-wrapper">
                <div class="project">
                  <div class="photo-wrapper">
                    <div class="photo">
                      <a class="fancybox" href="{{asset('img/portfolio/port04.jpg')}}"><img class="img-responsive" src="{{asset('/img/portfolio/port04.jpg')}}" alt=""></a>
                    </div>
                    <div class="overlay"></div>
                  </div>
                </div>
              </div>
            </div><!-- col-lg-4 -->

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
              <div class="project-wrapper">
                <div class="project">
                  <div class="photo-wrapper">
                    <div class="photo">
                      <a class="fancybox" href="{{asset('img/portfolio/port05.jpg')}}"><img class="img-responsive" src="{{asset('/img/portfolio/port05.jpg')}}" alt=""></a>
                    </div>
                    <div class="overlay"></div>
                  </div>
                </div>
              </div>
            </div><!-- col-lg-4 -->

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
              <div class="project-wrapper">
                <div class="project">
                  <div class="photo-wrapper">
                    <div class="photo">
                      <a class="fancybox" href="{{asset('img/portfolio/port06.jpg')}}"><img class="img-responsive" src="{{asset('/img/portfolio/port06.jpg')}}" alt=""></a>
                    </div>
                    <div class="overlay"></div>
                  </div>
                </div>
              </div>
            </div><!-- col-lg-4 -->
          </div><!-- /row -->

          </section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/common-scripts.js')}}"></script>
  </body>
</html>