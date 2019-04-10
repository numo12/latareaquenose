
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>wilbert y karla</title>
</head>
<body>
	<form method="POST" action="#">
	<section class="forma"><h1 style="text-align: center;">ejercicio de estaticas</h1>
	<CENTER><label>valor 1</label></CENTER>
	<CENTER><input type="text" name="var" style="border-radius: 0px; "></CENTER><br><br>
	
  
<center><button type="sumbit" name="enviar" class="boton">Resultados</button></center> 
</section><CENTER><H2>Resultados adquiridos</H2></CENTER>
</body>
</html>


<?php  
if (isset($_POST["enviar"])){ 
	$valor1=$_POST["var"];


function estaticas($valor1){
	$variableNormal= $valor1;
	echo ("El valor de \$variableNormal al comienzo de la función es $variableNormal.<br />");
	$variableNormal*=2;
	echo ("Al duplicar \$variableNormal su valor $variableNormal.<br />");
}
echo ("<u>Primera ejecución de la función.</u><br />");
estaticas($valor1);
echo ("<u>Segunda ejecución de la función.</u><br />");
estaticas($valor1);
}
?>
