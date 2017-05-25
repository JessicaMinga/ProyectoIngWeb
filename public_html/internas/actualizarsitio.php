<?php 
		include("../../resources/seguridad_a.php"); 


		include("../../resources/config.php");
      
        include("../../resources/class_mysql.php");
        extract($_GET);
        $model = new funcionesModelo(); 


      


    $id=$_GET['a'];
 
  
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
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li ><a href="administracion.php">Inicio <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Editar Usuario</a></li>
            <li class="active"><a href="mostrarSitiosTuristicos.php">Mostrar Sitios turisticos</a></li>
            <li><a href="#">Ingresar Nuevo Sitio</a></li>
          </ul>
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
          
          <?php 

          $sitio = $model -> get_datosItemSitio($id);

        list($nombre,$descripcion,$latitud, $longitud,$foto)=$sitio;

          ?>
          




          <form class="form-horizontal" method="post" action="actualizaritemsitio.php?a=<?php echo $id; ?>" enctype="multipart/form-data">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="cedula" placeholder="Cedula" name="cedula" value="<?php echo $nombre[0];?> " disabled>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Descripcion</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="<?php echo $descripcion[1];?> ">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Latitud</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="apellido"  placeholder="Apellido" name="apellido" value="<?php echo $latitud[2];?> ">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Longitud</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="correo" placeholder="Correo" name="correo" value="<?php echo $longitud[3];?> ">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Foto</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="telefono"  placeholder="Telefono" name="telefono" value="<?php echo $foto[4];?> ">
            </div>
          </div>
           
  
  
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Actualizar</button>
    </div>
  </div>
</form>

          

          </div>
        </div>
      </div>
    </div>

   
  </body>
</html>