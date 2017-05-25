
<head>
	
	<link rel="stylesheet" type="text/css" media="screen" href="../css/login.css">
  
</head>
<body id="login">

	<div class="container">
		<img src="../images/callout.jpg" alt="">

		<form class="form-inline" name="nuevo_usuario" method="POST" action="login.php">
      <h1 align="center">REGISTRO DE USUARIOS</h1>
        <div class="form-group">
        <label for="exampleInputEmail2">Nombre de Usuario</label><br>
          <input type="text" class="form-control" id="exampleInputEmail2" placeholder="jane13" type="correo" name="nombre_user">
        </div>
   			<div class="form-group">
				<label for="exampleInputEmail2">Email</label><br>
    			<input type="text" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com" type="correo" name="correo">
  			</div>
   			<div class="form-group">
    			<label class="sr-only" for="exampleInputPassword3">Contraseña</label><br>
    			<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password" name="pass">
  			</div>
  		  <button type="submit" name="submit" class="btn btn-default"> INGRESAR </button><br>

  			<a href="home.php">REGRESAR</a>
		</form>
    <?php
      if(isset($_POST['login']))
      {
        @$nombre_user=$_POST['nombre_user'];
        @$password=$_POST['password'];
        $query = "select * from userinfotbl where username='$username' and password='$password' ";
        //echo $query;
        $query_run = mysqli_query($con,$query);
        //echo mysql_num_rows($query_run);
        if($query_run){
          if(mysqli_num_rows($query_run)>0){
          $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
          
          $_SESSION['username'] = $username;
          $_SESSION['password'] = $password;
          
          header( "Location: homepage.php");
          }
          else{
            echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
          }
        }
        else{
          echo '<script type="text/javascript">alert("Database Error")</script>';
        }
      }
      else {     }
    ?>
	</div>
</body>
</html>