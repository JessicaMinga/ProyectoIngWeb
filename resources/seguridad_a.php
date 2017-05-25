<?php
include("config.php");
$url=$url_site."index.php";
@session_start();

if($_SESSION["autentica"] != "SI"){
	header("Location: $url");
	exit();
}
?>
