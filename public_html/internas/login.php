<html lang="en">
<head>
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" media="screen" href="../css/login.css">
</head>
<body id="login">

  <div class="container">
    <img src="../images/callout.jpg" alt="">

    <form class="form-inline" name="nuevo_usuario" method="POST" action="../../resources/validacion.php">
      <h1 align="center">Ingreso de usuario</h1>
        <div class="form-group">
        <label for="exampleInputEmail2">Email</label><br>
          <input type="text" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com" type="correo" name="correo">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword3">Contraseña</label>
          <br>
          <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password" name="contrasena">
        </div>
        <button type="submit" name="submit" class="btn btn-default"> INGRESAR </button><br>
        <a href="registro.php"> REGISTRARSE?</a>
    </form>



  </div>
</body>
</html>