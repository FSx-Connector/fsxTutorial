<?php

echo '
<!DOCTYPE html>
<html lang="es-ES">
<head>

<title>Tutorial FSx-Connector ('.$tab.')</title>';
?>
 
<meta charset="utf-8">
<link rel="shortcut icon" href="./images/RWSfavicon.ico" type="image/x-icon" />
<link rel="icon" href="./images/RWSfavicon.ico" type="image/x-icon" />

<link rel="stylesheet" type="text/css" media="all" href="./stdtheme.css">

<link rel="stylesheet" type="text/css" media="print" href="./printer.css">
<!-- <link rel="stylesheet" type="text/css" media="all" href="./printer.css">
http://www.google.es/search?q=css+stylesheet+for+printer&rls=com.microsoft:es:IE-Address&ie=UTF-8&oe=UTF-8&sourceid=ie7&rlz=1I7ADFA_esES487&redir_esc=&ei=5rleUYe7MKar0QWW_oCIBw
http://coding.smashingmagazine.com/2011/11/24/how-to-set-up-a-print-style-sheet/
http://www.techrepublic.com/blog/programming-and-development/how-to-create-css-style-sheets-for-printing/3299
-->
<script>
<!--

var addr=document.location.href;
function displayError()
{
document.getElementById("err_url").value=addr;
document.getElementById("err_form").style.display="block";
document.getElementById("err_desc").focus();
hideSent();
window.scrollTo(0, document.body.scrollHeight);
}
function hideError()
{
document.getElementById("err_form").style.display="none";
}
function hideSent()
{
document.getElementById("err_sent").style.display="none";
}
function sendErr()
{
var xmlhttp;
var err_url=document.getElementById("err_url").value;
var err_email=document.getElementById("err_email").value;
var err_desc=document.getElementById("err_desc").value;
var c = document.getElementById('err_sent');
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("POST","err_sup.php",true);
xmlhttp.onreadystatechange=function() {
  if (xmlhttp.readyState==4) {
    c.innerHTML += xmlhttp.responseText;
  }
}
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("err_url=" + err_url + "&err_email=" + err_email + "&err_desc=" + escape(err_desc));
hideError();
document.getElementById("err_sent").style.display="block";
}
//-->
</script>
</head>
<body>

<div id="top">
	<div style="height:78px; background-image: url('images/bg_body2.gif'); background-repeat: repeat-x;">
		<div id="topLogo" style="background-image: url('images/bg_header.gif'); background-repeat: no-repeat; width: 825px; height: 78px;">
			<a id="top"></a>
			<a href="index.php"><img xwidth="336" xheight="69" src="images/fsx_logo_prestashop.gif" alt=" Tutorial FSx-Connector " style="border:0;margin-top:12px;margin-left:10px;" /></a>
		</div>
	</div>
	<div id="topnav">
		<div id="topnavTutP">
			<script>
					<!-- fsxTutorial.FactuSOL-PrestaShop.es
					txt=document.domain;
					txt=document.URL;
					document.write(txt);
			//--></script>
					
		</div>
		<div id="topnavTut">
			<a class="topnav" href="index.php" target="_top">INICIO</a>
			<a class="topnav" href="index.php?tab=nosintro" target="_top">NOSOTROS</a>
			<a class="topnav" href="http://www.factusol-prestashop.es" target="_blank" style="word-spacing:normal;">SITIO WEB</a>
			<a class="topnav" href="http://fsxmart.factusol-prestashop.es" target="_blank" style="word-spacing:normal;">COMPRAR</a>
			<a class="topnav" href="https://github.com/FSx-Connector" target="_blank">Git</a>
			<a class="topnav" href="index.php?tab=fsxfaq" target="_top">MAS...</a>
		</div>
		<div id="topnavAbout">
			<a class="topnav" href="" onclick="displayError();return false" style="word-spacing:normal;">REPORTE UN ERROR</a> |
			<a class="topnav" href="" onClick="window.print();return false">IMPRIMIR</a> |
			<a class="topnav" href="index.php?tab=sitemap" target="_top">SITEMAP</a>
			<!-- a class="topnav" href="#" style="word-spacing:normal;" target="_top">ACERCA DE</a -->	
		</div>
	</div>
	
	
<!-- div id="topbeta" style="position:absolute; top:20px; left:750px; width:200px; height:25px; z-index:100;">
	<img width="121" height="121" border="0" title=" Estamos trabajando en ello... ;) " alt="" src="images/beta_icon1.png" xstyle="margin-left: 20px">
</div -->
	
	<div id="page">
			
