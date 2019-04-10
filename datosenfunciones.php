
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>wilbert y karla</title>
</head>
<body>
	<form method="POST" action="#">
	<section class="forma"><h1 style="text-align: center;">datos en funciones</h1>
	<label>numero 1</label>
	<input type="text" name="var" style="border-radius: 6px; "><br><br>
	
  
<center><button type="sumbit" name="enviar" class="boton">Resultados</button></center> 
</section><center><H2>Resultados adqueridos</H2></CENTER>
</body>
</html>

<?php  
if (isset($_POST["enviar"])){ 
	$numero=$_POST["var"];

function cuadrado($numero){
	$cuadrado=$numero*$numero;
	echo ("El cuadrado de $numero es $cuadrado. <br />");
}
$numero=$numero;
$cuadrado=$numero*$numero;
cuadrado($numero);
echo ("La variable \$numero vale $numero y es de tipo ".gettype ($numero) ."<br />");

echo ("La variable \$cuadrado vale $cuadrado y es de tipo ".gettype ($cuadrado) ."<br />");
}
?>