<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>equipo unido</title>
</head>
</head>
<body>
	<form method="POST" action="#">
	<section class="forma"><h1 style="text-align: center;">actividad de bucle for</h1>
	<label>INsertar un numero</label>
	<input type="number" name="var" style="border-radius: 0px; "><br><br>

<center><button type="sumbit" name="enviar" class="boton">Resultados</button></center> 
</section><CENTER><H2>Resultados adqueridos</H2></CENTER>
</body>
</html>

<?php  
if (isset($_POST["enviar"])){

$varCon=$_POST["var"];

	for ($varCon=$varCon; $varCon <=10; $varCon ++){
		echo ($varCon."<br />");
	}
}
?>