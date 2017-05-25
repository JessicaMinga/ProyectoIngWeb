<?php
include("../../resources/class_mysql.php");	
     $model = new funcionesModelo(); 


$id= $_GET['a'];


$eliminar = $model -> get_eliminarSitio($id);



		if(!$eliminar) {
		    return false;
		}else{
				
			if($eliminar == 1 ){

					echo '<script language="javascript">alert("Actualizado Correcto"); location.href="mostrarSitiosTuristicos.php"</script>'; 

			}

			
		}
?>
