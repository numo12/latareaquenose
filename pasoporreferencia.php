
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>wilbert y karla</title>
</head>
<body>
	<form method="POST" action="#">
	<section class="forma"><h1 style="text-align: center;">EJERCICIO DE PASO POR REFERENCIA</h1>
	<label>numero</label>
	<center><input type="text" name="var" style="border-radius: 0px; "></CENTER><br><br>
	
  
<center><button type="sumbit" name="enviar" class="boton">Resultados</button></center> 
</section><CENTER><H2>Resultados</H2></center>
</body>
</html

<?php
if (isset($_POST["enviar"])){

$numero=$_POST["var"];

function cuadrado(&$numero){
	$numero*=$numero;
	echo ("En la función el número se eleva al cuadrado, obteniendo el resultado: $numero<br />");
}
echo ("El número, antes de invocar la función vale: $numero<br />");
cuadrado($numero);
echo ("El número, después de invocar la función vale: $numero");
}
?>