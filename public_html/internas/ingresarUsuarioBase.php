<?php

		


		include("../../resources/config.php");
      
        include("../../resources/class_mysql.php");
        extract($_GET);
        $model = new funcionesModelo(); 

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$key="hhjashsowejcmo";  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
    $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $contrasena, MCRYPT_MODE_CBC, md5(md5($key))));
		
		$ingreso= $model -> get_ingresarUsuario($nombre,$apellido,$correo,$encrypted);



if($ingreso == 0){

echo '<script language="javascript">alert("No se ha ingresado");</script>'; 
	
}else{

echo '<script language="javascript">alert("Ingreso correcto"); location.href="ingresarUsuario.php"</script>'; 
	
}

?>
