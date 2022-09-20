<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="css.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Iniciar sesi&oacuten</title>




  </style>
</head>
<body class="hold-transition login-page " style="background-image:url('img/turquesas.jpg'); background-size: cover;">
<div class="login-box">
  <div class="login-logo">
    <h2><a href="admin/index.php"><b>Glosario </b>Gastronomico</a></h2>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <h4 class="login-box-msg">Iniciar Sesi&oacuten</h4>

      <form action="validar.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Correo" name="correo">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        &nbsp;
        <div class="row">
          <div class="col-7">
            
          </div>
          <!-- /.col -->

          <div class="col-5  " >
            <button type="submit button" class="btn  " style="background-color:#1abc9c; color: white;">Iniciar Sesi&oacuten</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
       &nbsp;
      
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html" style="color:#1abc9c;">Olvide mi contraseña</a>
      </p>
      <!--<p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>-->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.min.js"></script>
</body>
</html>