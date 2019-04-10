<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>wilber y karla</title>
</head>
<body>
	<form method="POST" action="#">
	<section class="forma"><h1 style="text-align: center;">Funcion con resultados</h1>
	<CENTER><label>numero</label></CENTER>
	<CENTER><input type="text" name="var" style="border-radius: 6px; "></CENTER><br><br>
	
  
<center><button type="sumbit" name="enviar" class="boton">Resultados</button></center> 
</section><CENTER><H2>Resultados aqueridos</H2></CENTER>
</body>
</html>

<?php 
if (isset($_POST["enviar"])){ 
	$numero=$_POST["var"];

function cuadrado($numero){
	$numero*=$numero;
	return $numero;
}
$numero=$numero;
$cuadrado=cuadrado($numero);
echo ("El cuadrado del número $numero es $cuadrado.");
}
?>
