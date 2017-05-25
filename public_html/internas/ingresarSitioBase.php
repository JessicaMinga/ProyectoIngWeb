<?php

		


		include("../../resources/config.php");
      
        include("../../resources/class_mysql.php");
        extract($_GET);
        $model = new funcionesModelo(); 

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$latitud = $_POST['latitud'];
$longitud = $_POST['longitud'];
$foto = $_POST['foto'];
$idprovincia = $_POST['provincia'];
$idtipositio = $_POST['tipo'];


		$ingreso= $model -> get_ingresarSitio($nombre,$idtipositio,$idprovincia,$descripcion,$latitud,$longitud,$foto);



if($ingreso == 0){

echo '<script language="javascript">alert("No se ha ingresado");</script>'; 
	
}else{

echo '<script language="javascript">alert("Ingreso correcto"); location.href="../index.php"</script>'; 
	
}

?>
