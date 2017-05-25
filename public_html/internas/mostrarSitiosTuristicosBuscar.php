 <script type="text/javascript" src="../js/ajaxBuscar.js"></script>
<?php 

        include("../../resources/config.php");
      
        extract($_GET);
     

        $provincias= $model -> get_provincias();
        list($provincias)=$provincias;        
        

        $tipo= $model -> get_tipo();
        list($tipo)=$tipo;    

        $url= $url_site;
      

               ?>
                 <form >
                            

                        
                         <div class="col-xs-4">
                            
                            <select class="form-control input-lg" id="provincia" name="provincia">
                               
                                <?php 
                                    for ($i=0; $i < sizeof($provincias) ; $i++) { 
                                        echo "<option>".$provincias[$i]."</option>";
                                    }
                                 ?>
                                 
                                
                            </select>

                        </div>
                         <div class="col-xs-4">
                            
                            <select class="form-control input-lg" id="tipo" name="tipo">
                               
                                <?php 
                                    for ($i=0; $i < sizeof($tipo) ; $i++) { 
                                        echo "<option>".$tipo[$i]."</option>";
                                    }
                                 ?>
                                 
                                
                            </select>


                        </div>
                        
                         <input  type="button" class="btn btn-primary" onclick="loadXMLDocBusP('<?php echo $url;?>')" value="Buscar" />
                        </form>
              
             

                
                