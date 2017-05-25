<?php 
		

 		include("../../resources/config.php");
      
      
        extract($_GET);
        $model = new funcionesModelo(); 
         $id=$_GET['a'];
      
   

        $item= $model -> get_datosItemSitio($id);
        list($nombre,$descripcion,$latitud, $longitud,$foto)=$item;        

 ?>

 <h3><?php echo  $item[0];?></h3><br>

 <p><?php echo $item[1]; ?></p><br>

 <img class='img-responsive img-hover' src='<?php echo $item[4]; ?>' alt=''>





