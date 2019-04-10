
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>wilbert y karla</title>
</head>
<body>
	<form method="POST" action="#">
	<section class="forma"><h1 style="text-align: center;">uncion con argumentos</h1>
	<CENTER><label>INGRESE UN DATO</label></CENTER>
	<CENTER><input type="text" name="var" style="border-radius: 0px; "></CENTER><br><br>
  
<center><button type="sumbit" name="enviar" class="boton">Resultados</button></center> 
</section><CENTER><H2>Resultados adqueridos</H2></CENTER>
</body>
</html>


<?php

if (isset($_POST["enviar"])){

$numero=$_POST["var"];

function mostrarUnNumero($mostrar){
	echo ("Número  $mostrar");
}
$numero=$numero;
mostrarUnNumero ($numero);
}
?>