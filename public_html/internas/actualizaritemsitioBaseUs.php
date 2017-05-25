<?php
	include("../../resources/class_mysql.php");	
     $model = new funcionesModelo();    
$id= $_GET['a'];
$nombre = $_POST['nombre'];
$descripcion=$_POST['descripcion'];

$foto=$_POST['foto'];



	$actualizar = $model -> get_actualizarSitioUs($id,$nombre,$descripcion,$foto);
		if(!$actualizar) {
		    echo '<script language="javascript">alert("Fallo Actulización"); location.href="mostrarSitiosTuristicosUs.php"</script>'; 
		}else{
				
			if($actualizar == 1 ){

					echo '<script language="javascript">alert("Actualizado Correcto"); location.href="mostrarSitiosTuristicosUs.php"</script>'; 

			}

			
		}





?>

