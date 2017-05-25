<?php 

   
        include("config.php");
       
        include("class_mysql.php");
        extract($_GET);
   

        $modelo = new funcionesModelo(); 

   

	
     $correo= $_POST['correo'];
     $pass = $_POST['contrasena'];
     
	 $key="hhjashsowejcmo";  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
    $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $pass, MCRYPT_MODE_CBC, md5(md5($key))));

 	$control=$modelo->get_validacionUsuario($correo,$encrypted);

	list($num_total_registros,$correoB,$contrasena,$nombre,$idusuario,$rol,$foto)=$control;
	if ($num_total_registros >0) {
		//$key='hhjashsowejcmo';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
    // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
//$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $pass, MCRYPT_MODE_CBC, md5(md5($key))));
  
   
		$correoC= $correo;
		$contrasenaC= $contrasena;
		
		  $key="hhjashsowejcmo";  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
     $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($contrasenaC), MCRYPT_MODE_CBC, md5(md5($key))),"\0");
  

		if (($correo==$correoC) && ($pass==$decrypted) ) {

			if ($rol == 1) {
			session_start();
			$url=$url_site.'internas/administracion.php';
			
	               //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario
	               $_SESSION["autentica"] = "SI";
	               $_SESSION["usuarioactual"] = $nombre;
	               $_SESSION["usuarioid"] = $idusuario; //nombre del usuario logueado.
	               $_SESSION["usuariofoto"]= $foto;
	               //Direccionamos a nuestra página principal del sistema.
	               echo "<script language='javascript'>alert('Ingreso correcto');location.href='$url'</script>";
	          }else if($rol == 0){
	          	$url=$url_site.'internas/usuario.php';

	          	session_start();
	               //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario
	               $_SESSION["autenticau"] = "SI";
	               $_SESSION["usuarioactualu"] = $nombre;
	               $_SESSION["usuarioidu"] = $idusuario; //nombre del usuario logueado.
	               $_SESSION["usuariofoto"]= $foto;
	               //Direccionamos a nuestra página principal del sistema.
	               echo "<script language='javascript'>alert('Ingreso correcto');location.href='$url'</script>";

	          }else{


     }

		}

	}else{
		
		echo "<script language='javascript'>alert('Correo o Contraseña incorrectos'); location.href='$url_site'</script>";
	}
	
	


 ?>