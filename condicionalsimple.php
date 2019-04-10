<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>wilbert y karla</title>
</head>
<body>
	<form method="POST" action="#">
	<section class="forma"><h1 style="text-align: center;">condicion simple</h1>
	<CENTER><label>Edad actual de la persona</label></CENTER>
	<CENTER><input type="number" name="edad" style="border-radius: 0px; "></CENTER><br><br>

<center><button type="sumbit" name="enviar" class="boton">Resultados</button></center> 
</section><CENTER><H2>Resultados de acuerdo a su edad</H2></CENTER>
</body>
</html>

<?php  

if (isset($_POST["enviar"])){

$edad=$_POST["edad"];


	if ($edad > 18) {
		echo ("EL USUARIO ES MAYOR DE EDAD.");
		echo "<br>";
	}
	if ($edad > 65) {
		echo ("EL USUARIO YA SE JUBILO.");
		echo "<br>";
	}
}

?>