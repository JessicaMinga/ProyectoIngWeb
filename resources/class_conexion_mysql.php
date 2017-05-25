<?php  
include("config.php"); 

class Modelo{ 
    public $db; 

    public function __construct() { 


    $this->db = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($this->db,DB_CHARSET);
	if ($this->db->connect_errno) {
		die ("<h1>Fallo al conectar a MySQL: (" . $this->db->connect_errno . ") " . $this->db->connect_error."</h1>");
	}
	        
  }
  }    
?> 