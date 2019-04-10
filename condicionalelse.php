
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>wilbert y Karla</title>
</head>
<body>
	<form method="POST" action="#">
	<section class="forma"><h1 style="text-align: center;">Condicional else</h1>
	<CENTER><label>Edad actual de la persona</label></CENTER>
	<CENTER><input type="number" name="edad" style="border-radius: 0px; "></CENTER><br><br>

<center><button type="sumbit" name="enviar" class="boton">resultados</button></center> 
</section><CENTER><H2>RESULTADOS adqueridos</H2></CENTER>
</body>
</html>

<?php  
if (isset($_POST["enviar"])){

$edad=$_POST["edad"];


	if ($edad > 18) {
		echo ("El usuario es mayor de edad.");
	} else {
	 	echo ("El usuario NO es mayor de edad.");
	}
}

?>