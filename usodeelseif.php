
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>wilbert y karla</title>
</head>
<body>
	<form method="POST" action="#">
	<section class="forma"><h1 style="text-align: center;">PHP Uso de Elseif</h1>
	<label>Edad</label>
	<input type="number" name="edad" style="border-radius: 6px; "><br><br>

<center><button type="sumbit" name="enviar" class="boton">Resultados</button></center> 
</section><H2>resultados</H2>
</body>
</html>

<?php  
if (isset($_POST["enviar"])){

$edad=$_POST["edad"];

	if ($edad<=10) {
		echo ("El usuario tiene de 0 a 10 años.");
	} elseif ($edad<=20) {
	 	echo ("El usuario tiene de 11 a 20 años.");
	} elseif ($edad<=30) {
	 	echo ("El usuario tiene de 21 a 30 años.");
	} elseif ($edad<=40) {
	 	echo ("El usuario tiene de 31 a 40 años.");
	} elseif ($edad<=50) {
	 	echo ("El usuario tiene de 41 a 50 años.");
	} elseif ($edad<=60) {
	 	echo ("El usuario tiene de 51 a 60 años.");
	} elseif ($edad<=70) {
	 	echo ("El usuario tiene de 61 a 70 años.");
	} elseif ($edad<=80) {
	 	echo ("El usuario tiene de 71 a 80 años.");
	} elseif ($edad<=90) {
	 	echo ("El usuario tiene de 81 a 90 años.");
	}
}
?>