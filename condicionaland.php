
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>wilbert y karla</title>
</head>
<body>
	<form method="POST" action="#">
	<section class="forma"><h1 style="text-align: center;">condicional and</h1>
	<center><label>Edad actual</label></center><br>
	<center><input type="number" name="edad" style="border-radius: 0px; "></center>	<br><br>

<center><button type="sumbit" name="enviar" class="boton">Enviar</button></center> 
</section><center><H2>Resultados de acuerdo su edad</H2><center>
</body>
</html>

<?php  
if (isset($_POST["enviar"])){

$edad=$_POST["edad"];

	if ($edad > 18 && $edad<66) {
		echo ("El usuario pues estar activo laboralmente.");
	} else {
	 	echo ("El usuario ya no puede estar activo laboralmente.");
	}
}
?>