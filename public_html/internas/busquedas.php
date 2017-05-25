<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
 <?php include("nav.php"); ?>
</head>
<body>
<div class="container">
    <div class="container-fluid">
      <div class="row">
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Sitios Turisticos</h1>

          <?php include("mostrarSitiosTuristicosBuscar.php"); ?>

          
           <div class="col-lg-10">

        <div id="myDiv"><?php include("mostrarSitiosTuristicoscontenido.php"); ?></div>
            

        </div>
          <?php  ?>

</div>
<!--==============================footer=================================-->
<?php 
  include("footer.php");

 ?>
</body>
</html>