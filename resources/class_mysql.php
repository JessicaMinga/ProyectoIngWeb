<?php 

include("class_conexion_mysql.php"); 

class funcionesModelo extends Modelo{  

    public function __construct() { 
        parent::__construct(); 
    } 


public function get_validacionUsuario($correo,$clave){

        $ssql = "select * from usuario where correo = '".$correo."' and contrasena='".$clave."'";
        $rs = mysqli_query($this->db,$ssql); 
        $num_total_registros = mysqli_num_rows($rs); 

        $row = mysqli_fetch_object($rs);
        
        $correoB=$row -> correo;
        $contrasena=$row -> contrasena;
        $nombre=$row -> nombre;
        $idusuario= $row -> idusuario;
        $rol= $row -> rol;
        $foto=$row -> foto;
     
        mysqli_free_result($rs); 
        return array($num_total_registros,$correoB,$contrasena,$nombre,$idusuario,$rol,$foto);
    }


    public function get_provincias(){

            $ssql = "select * from provincia " ; 
            $rs = mysqli_query($this->db,$ssql); 
            $provincia = array(); //creamos un array
        //guardamos en un array multidimensional todos los datos de la consulta
            $i=0;
            while($row = mysqli_fetch_object($rs)){
                $provincia[$i] = $row -> nombreprovincia;
                
                $i++;
            }
        
            mysqli_free_result($rs); 
            return array($provincia);
    }


    public function get_tipo(){

            $ssql = "select * from tipolugar " ; 
            $rs = mysqli_query($this->db,$ssql); 
            $tipo = array(); //creamos un array
        //guardamos en un array multidimensional todos los datos de la consulta
            $i=0;
            while($row = mysqli_fetch_object($rs)){
                $tipo[$i] = $row -> nombretipo;
                
                $i++;
            }
        
            mysqli_free_result($rs); 
            return array($tipo);
    }

    public function get_numSitios($TAMANO_PAGINA){

        $ssql = "select * from turismo " ; 
       
        $rs = mysqli_query($this->db,$ssql); 
        $num_total_registros = mysqli_num_rows($rs); 
        //calculo el total de páginas 
        $total_paginas = ceil($num_total_registros / $TAMANO_PAGINA); 
        mysqli_free_result($rs); 
        

        return($total_paginas);
    }

    public function get_sitios($inicio,$TAMANO_PAGINA){
        //construyo la sentencia SQL 
        $ssql = "select * from turismo ". "limit ".$inicio.",".$TAMANO_PAGINA; 
        $rs = mysqli_query($this->db,$ssql); 
        
        $idturismo = array(); //creamos un array
        $foto = array(); //creamos un array
        $nombre = array(); //creamos un array
        //guardamos en un array multidimensional todos los datos de la consulta
        $i=0;
        while($row = mysqli_fetch_object($rs)){
            $idturismo[$i] = $row -> idturismo;
            $foto[$i] = $row -> foto;
            $nombre[$i] = $row -> nombre;
            $i++;
        }
    
        mysqli_free_result($rs); 
        return array($idturismo,$foto,$nombre);
    }


    public function get_busqueda($provincia,$tipo){
       $ssql = "SELECT * FROM  turismo t, tipolugar l, provincia p WHERE t.tipolugar = l.idtipolugar AND t.idprovincia = p.idprovincia AND l.nombretipo = '$tipo' AND p.nombreprovincia= '$provincia'" ;

        $rs = mysqli_query($this->db,$ssql); 
        $num_total_registros = mysqli_num_rows($rs); 
        $idturismo = array(); //creamos un array
        $foto = array(); //creamos un array
        $nombre = array(); //creamos un array
        //guardamos en un array multidimensional todos los datos de la consulta
        $i=0;
        while($row = mysqli_fetch_object($rs)){
           
            $idturismo[$i] = $row -> idturismo;
            $foto[$i] = $row -> foto;
            $nombre[$i] = $row -> nombre;
            $i++;
        }
    
        mysqli_free_result($rs); 
        return array($num_total_registros,$idturismo,$foto,$nombre);

    }



}


?>