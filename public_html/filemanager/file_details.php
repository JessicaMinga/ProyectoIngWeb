<?php
error_reporting(0);

include("confic.inc.php");
$file=substr($_GET['file'], "3");
?>
<div id="optionsWrapper2">
	<p>
 <b>URL:</b> <?php echo C70d7bd0f.$file; ?><br />
 <a href="javascript:Fa6ccfa7b();">Borrar este archivo</a>
 &nbsp;&nbsp;-&nbsp;&nbsp;
<a href="javascript:Fe9b0cef7('<?php echo C70d7bd0f.$file; ?>');">Insertar esta imagen</a>
 </p>
</div>
 <?php
	$extension=substr($_GET['file'], -4, 4);
if ($extension==".jpg" || $extension==".gif" || $extension==".png") {
 echo '
 <div id="imgWrapper">
 <img src="'.$_GET['file'].'">
 </div>
 ';
} else {
 echo '<a href="'.$_GET['file'].'" target="_blank">Opciones</a>';
}
?>
<script language="javascript">
function Fa6ccfa7b(codigo) {
	var fRet;
fRet = confirm('Seguro desea borrar este archivo?');
if (fRet==false) {
 return;
} else {
 window.location='index.php?action=delete&file=<?php echo $_GET['file']; ?>';
}
};
function Fe9b0cef7(cual) {
	//var o = opener.document.getElementById("42_textInput");
	//var o = $("div.cke_dialog input:first", window.opener.document).val(cual);
	var o = $("div.cke_dialog_ui_input_text input:first", window.opener.document).val(cual);
	//o.value = cual;
	self.close();
}
</script>