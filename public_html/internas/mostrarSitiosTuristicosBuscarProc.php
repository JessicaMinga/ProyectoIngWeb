
<?php 
       
        include("../../resources/class_mysql.php");
        extract($_GET);
        $model = new funcionesModelo(); 

   

$provincia=$_POST['provincia'];
$tipo=$_POST['tipo'];
       


$sitiosbusqueda = $model -> get_busqueda($provincia,$tipo);

list($num_total_registros,$idturismo, $foto, $nombre)=$sitiosbusqueda;

if($num_total_registros == 0){

echo '<b>No hay sugerencias</b>';
echo "<input  type='button' class='btn btn-primary' onclick='location.reload()' value='Atras'/>";


}else{
    echo "<input  type='button' class='btn btn-primary' onclick='location.reload()' value='Atras'/>";
echo "<div class='table-wrapper' id='tabla'>";          

echo "<table class='table table-hover' >";
 
echo "<thead>";
echo "<tr>"; 
echo "<th></th>";  
echo "<th>FOTO</th>";  
echo "<th>NOMBRE</th>";  
echo "<th>ACTULIZAR</th>";
echo "<th>ELIMINAR</th>";
echo "</tr>";
echo "</thead>";






for ($i=0; $i < sizeof($idturismo) ; $i++) { 
   

    $stri=$idturismo[$i];


    # code...
    
    echo "<tbody>";   
    echo "<tr>";  
    echo "<td id=".$stri." >".$stri."</td>";  
    echo "<td id=".$stri." ><img class='img-responsive img-hover' src='".$foto[$i]."' alt=''></td>";  
    echo "<td id=".$stri." >".$nombre[$i]."</td>";
    echo "<td id=".$stri." onclick='EnviarA(this.id)'><input  type='button' value='Actualizar'></td>";
    echo "<td id=".$stri." onclick='EnviarE(this.id)'><input  type='button' value='Eliminar'></td>";
    echo "</tr>"; 
    echo "</tbody>"; 
} 
echo "</table>"; 

echo "</div>";


}



 ?>


<script type="text/javascript"> 


function EnviarA(i) { 
var c = document.getElementById(i).innerHTML; 
location.href = "internas/actualizarsitio.php?a="+c; 
} 

function EnviarE(i) { 
var c = document.getElementById(i).innerHTML; 

var answer = confirm("Deseas eliminar este registro?")
    if (answer){
        location.href = "eliminarbasesitio.php?a="+c; 
    }
    else{
        // do nothing
    }

} 




</script> 

   
