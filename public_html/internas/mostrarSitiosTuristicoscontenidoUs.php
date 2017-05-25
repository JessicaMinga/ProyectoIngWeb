<?php 

       

$TAMANO_PAGINA = 10; 
//examino la página a mostrar y el inicio del registro a mostrar 
@$pagina = $_GET["pagina"]; 
if (!$pagina) { 
    $inicio = 0; 
    $pagina=1; 
} 
else { 
    $inicio = ($pagina - 1) * $TAMANO_PAGINA; 
}

$total_paginas = $model -> get_numSitios($TAMANO_PAGINA);

$sitios = $model -> get_sitios($inicio,$TAMANO_PAGINA);

list($idturismo, $foto, $nombre)=$sitios;


echo "<div class='table-wrapper' id='tabla'>";          

echo "<table class='table table-hover' >";
 
echo "<thead>";
echo "<tr>"; 
echo "<th></th>";  
echo "<th>FOTO</th>";  
echo "<th>NOMBRE</th>";  
echo "<th>ACTULIZAR</th>";

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

    echo "</tr>"; 
    echo "</tbody>"; 
} 
echo "</table>"; 

echo "</div>";






 ?>

      
        

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                   
                    <?php 
                        for ($i=1;$i<=$total_paginas;$i++){ 
                            if ($pagina == $i){
                                //si muestro el índice de la página actual, no coloco enlace 
                                echo "<li class='active'><a href='mostrarSitiosTuristicosUs.php?pagina=" . $i . "&criterio="  . "'>" . $i . "</a></li>";
                            }else{ 
                                //si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa página 
                                echo "<li><a href='mostrarSitiosTuristicosUs.php?pagina=" . $i . "&criterio="  . "'>" . $i . "</a></li>"; 
                        } 
                    }


                     ?>
                    
                        
                    
            
                </ul>
            </div>
        </div>
        <!-- /.row -->

  

<script type="text/javascript"> 


function EnviarA(i) { 
var c = document.getElementById(i).innerHTML; 
location.href = "actualizarsitioUs.php?a="+c; 
} 






</script> 

   
