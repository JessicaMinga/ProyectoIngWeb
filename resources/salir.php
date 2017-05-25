<?php 
include("config.php");
extract($_GET);
$url=$url_site."index.php";
session_start();
session_destroy();

echo "<script language='javascript'>alert('Sesion Cerrada');location.href='$url'</script>";

?>
