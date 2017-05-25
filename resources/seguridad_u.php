<?php
include("config.php");
$url=$url_site."index.php";
@session_start();

if($_SESSION["autenticau"] != "SI"){
	header("Location: $url");
	exit();
}
?>
