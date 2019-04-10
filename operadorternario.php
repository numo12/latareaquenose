<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>wilbert y karla</title>
</head>
<body>
	<form method="POST" action="#">
	<section class="forma"><h1 style="text-align: center;">Operador ternario</h1>
	<label>Edad de la persona</label>
	<center><input type="number" name="edad" style="border-radius: 0px; "></center><br><br>

<center><button type="sumbit" name="enviar" class="boton">Resultados</button></center> 
</section><CENTER><H2>Resultados</H2></CENTER>
</body>
</html>

<?php  
if (isset($_POST["enviar"])){

$edad=$_POST["edad"];

	$usuario=($edad>=18)?"EL USUARIO ES MAYOR DE EDAD": "EL USUARIO NO ES MAYOR DE EDAD";
	echo ($usuario);
}
 ?>