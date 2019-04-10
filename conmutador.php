<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>wilbert y karla</title>
<body>
	<form method="POST" action="#">
	<section class="forma"><h1 style="text-align: center;">Ejercicio conmutador</h1>
	<CENTER><label>nombre de un pais</label></CENTER>
	<CENTER><input type="text" name="pais" style="border-radius: 0px; "></CENTER><br><br>

<center><button type="sumbit" name="enviar" class="boton">Enviar</button></center> 
</section><CENTER><H2>Resultados</H2></CENTER>
</body>
</html>

<?php  
if (isset($_POST["enviar"])){

$pais=$_POST["pais"];

	switch ($pais) {
		case "INGLATERRA":
			echo ("El usuario es inglés.");
			break;
		case "ALEMANIA":
			echo ("El usuario es alemán.");
			break;	
		case "ITALIA":
			echo ("El usuario es italiano.");
			break;
		case "ESPAÑA":
			echo ("El usuario es español.");
			break;	
		case "FRANCIA":
			echo ("El usuario es francés.");
			break;	
		default:
			echo ("El usuario es de una nacionalidad no especificada en la lista.");
			break;
	}
}
?>