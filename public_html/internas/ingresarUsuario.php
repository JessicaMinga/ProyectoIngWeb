<?php 
		include("../../resources/seguridad_a.php"); 


		include("../../resources/config.php");
      
        include("../../resources/class_mysql.php");
        extract($_GET);
        $model = new funcionesModelo(); 


      



  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="..js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

<?php include("navad.php"); ?>

    <div class="container-fluid">
      <div class="row">
        <?php include("columnaad.php"); ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Ingresar Sitio Turistico</h1>
      
          <form class="form-horizontal"  method="post" action="ingresarUsuarioBase.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="nombre" placeholder="nombre" name="nombre"  >
            </div>
          </div>
          
          
            
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Apellido</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="apellido"  placeholder="apellido" name="apellido" >
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
            <div class="col-sm-6">
              <input type="email" class="form-control" id="correo" placeholder="correo" name="correo" >
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Caontraseña</label>
            <div class="col-sm-6">
              <input type="password" class="form-control" id="contrasena"  placeholder="contraseña" name="contrasena" >
            </div>
          </div>
           
  
  
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-6">
      <button type="submit" class="btn btn-default">Ingresar</button>
    </div>
  </div>
</form>

          

          </div>
        </div>
      </div>
    </div>

   
  </body>
</html>