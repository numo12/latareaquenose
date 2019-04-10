<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>equipo</title>
</head>
<body>
	<form method="POST" action="#">
	<section class="forma"><h1 style="text-align: center;">php (ambito)</h1>
	<label>valor</label>
	<input type="text" name="var" style="border-radius: 8px; "><br><br>
	
  
<center><button type="sumbit" name="enviar" class="boton">enviar</button></center> 
</section><center><H2>Resultados</H2></center>
</body>
</html>



<?php  
if (isset($_POST["enviar"])){ 
	$valor=$_POST["var"];

function cuadrado($valor){
	$cuadrado=$valor*$valor;
	$numero=$valor;
	echo ("El cuadrado de $valor es $cuadrado. <br />");
	echo ("La variable \$numero dentro de la función vale $numero y es de tipo ".gettype ($numero) ."<br />");

	
}
$valor=$valor;
$cuadrado=$valor * $valor;
$numero=$valor;
cuadrado($numero);
echo ("La variable \$numero fuera de la función vale $numero y es de tipo ".gettype ($numero)."<br />");
echo ("La variable \$cuadrado fuera de la función vale $cuadrado y es de tipo ".gettype ($cuadrado) ."<br />");

}
?>