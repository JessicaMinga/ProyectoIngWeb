 <script type="text/javascript" src="../js/ajaxBuscarVi.js"></script>
<?php 

        include("../../resources/config.php");
      
        extract($_GET);
     

        $provincias= $model -> get_provincias();
        list($idprovincia,$provincias)=$provincias;        
        

        $tipo= $model -> get_tipo();
        list($idtipolugar,$tipo)=$tipo;    

        $url= $url_site;
      

               ?>
                 <form >
                            

                        
                         <div class="col-xs-4">
                            
                            <select class="form-control input-lg" id="provincia" name="provincia">
                               
                                <?php 
                                    for ($i=0; $i < sizeof($provincias) ; $i++) { 
                                        echo "<option >".$provincias[$i]."</option>";
                                    }
                                 ?>
                                 
                                
                            </select>

                        </div>
                         <div class="col-xs-4">
                            
                            <select class="form-control input-lg" id="tipo" name="tipo">
                               
                                <?php 
                                    for ($i=0; $i < sizeof($tipo) ; $i++) { 
                                        echo "<option >".$tipo[$i]."</option>";
                                    }
                                 ?>
                                 
                                
                            </select>


                        </div>
                        
                         <input  type="button" class="btn btn-primary" onclick="loadXMLDocBusP('<?php echo $url;?>')" value="Buscar" />
                        </form>
              
             

                
                