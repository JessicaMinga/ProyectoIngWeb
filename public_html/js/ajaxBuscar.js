function loadXMLDocBusP(url){
var xmlhttp;



var provincia=document.getElementById('provincia').value;
var tipo=document.getElementById('tipo').value;
var urlJ= url.concat('internas/mostrarSitiosTuristicosBuscarProc.php');


if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}else{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}

xmlhttp.onreadystatechange=function(){
if (xmlhttp.readyState==4 && xmlhttp.status==200){
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST",urlJ,true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("provincia="+provincia+"&tipo="+tipo);

}
