<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>wilberth y karla</title>
</head>
<body>
	<form method="POST" action="#">
	<section class="forma"><h1 style="text-align: center;">decendente for</h1>
	<CENTER><label>Ingrese su numero</label></CENTER>
	<CENTER><input type="number" name="var" style="border-radius: px; "></CENTER><br><br>

<center><button type="sumbit" name="enviar" class="boton">Resultados</button></center> 
</section><CENTER><H2>Resultados esperados</H2></CENTER>
</body>
</html>

<?php  

if (isset($_POST["enviar"])){

$varCon=$_POST["var"];


	for ($varCon=$varCon; $varCon >=1; $varCon --){
		echo ($varCon."<br />");
	}
}
?>