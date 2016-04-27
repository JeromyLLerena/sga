<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <title>Adventure time: Dashboard</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/adventure-time-theme-responsive.css">
    <link rel="stylesheet" href="/css/adventure-time-theme.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> <![endif]-->
  </head>
  <body>
    <div id="login-page">
      <div class="container">
        <form class="form-login" action="dashboard">
          <h2 class="form-login-heading">SISTEMA DE GESTIÓN DE ALERTAS</h2>
          <div class="login-wrap">
            <input type="text" class="form-control form-group" placeholder="User ID" autofocus>
            <input type="password" class="form-control form-group" placeholder="Password">
            <label class="checkbox">
              <span class="text-center">
                <a data-toggle="modal" id="openBtn" href="login#myModal1">¿Te olvidaste el password?</a>                
              </span>
            </label>
            <button class="btn btn-theme btn-block" href="dashboard" type="submit">
            <i class="fa fa-lock"></i>
            INGRESAR</button>
            <hr>
            
            <div class="registration">
              ¿No tienes cuentas aún?<br/>
              <a data-toggle="modal" id="openBtn" href="login#myModal2">Contacta con el administrador</a>
            </div>
          </div>
          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal1" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">¿Te olvidaste el password?</h4>
                </div>
                <div class="modal-body">
                  <p>Ingresa tu email para recuperar tu contraseña.</p>
                  <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
                </div>
                <div class="modal-footer">
                  <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                  <button class="btn btn-theme" type="button">Enviar</button>
                </div>
              </div>
            </div>
          </div>         
          <!-- modal -->

          <!-- Modal2 -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal2" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">¿Quieres contactar con el administrador?</h4>
                </div>
                <div class="modal-body">
                  <p>Ingresa tus nombres</p>
                  <input type="text" name="nombres" value="" placeholder="Nombres" class="form-control placeholder-no-fix"><br>
                  <p>Ingresa tus apellidos</p>
                  <input type="text" name="apellidos" value="" placeholder="Apellidos" class="form-control placeholder-no-fix"><br>
                  <p>Ingresa tu número</p>
                  <input type="text" name="telefono" value="" placeholder="Teléfono" class="form-control placeholder-no-fix"><br>
                  <p>Ingresa tu email</p>
                  <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
                </div>
                <div class="modal-footer">
                  <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                  <button class="btn btn-theme" type="button">Enviar</button>
                </div>
              </div>
            </div>
          </div>
          
          <!-- modal -->
        </form>
      </div>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
  </body>
</html>