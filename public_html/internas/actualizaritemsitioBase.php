<?php
	include("../../resources/class_mysql.php");	
     $model = new funcionesModelo();    
$id= $_GET['a'];
$nombre = $_POST['nombre'];
$descripcion=$_POST['descripcion'];
$latitud=$_POST['latitud'];
$longitud=$_POST['longitud'];
$foto=$_POST['foto'];



	$actualizar = $model -> get_actualizarSitio($id,$nombre,$descripcion,$latitud, $longitud,$foto);
		if(!$actualizar) {
		    echo '<script language="javascript">alert("Fallo Actulización"); location.href="mostrarSitiosTuristicos.php"</script>'; 
		}else{
				
			if($actualizar == 1 ){

					echo '<script language="javascript">alert("Actualizado Correcto"); location.href="mostrarSitiosTuristicos.php"</script>'; 

			}

			
		}





?>

