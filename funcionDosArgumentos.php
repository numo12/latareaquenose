
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>wilbert y karla</title>
</head>
<body>
	<form method="POST" action="#">
	<section class="forma"><h1 style="text-align: center;">funcion con argumentos</h1>
	<CENTER><label>valor 1</label></CENTER>
	<CENTER><input type="text" name="var" style="border-radius: 0px; "></CENTER><br><br>
	<CENTER><label>valorm 2</label></CENTER>
	<CENTER><input type="text" name="var1" style="border-radius: 0px; "></center><br><br>
  
<center><button type="sumbit" name="enviar" class="boton">resultados</button></center> 
</section><CENTER><H2>resultados</H2></CENTER>
</body>
</html>



<?php  

if (isset($_POST["enviar"])){

$valor1=$_POST["var"];

$valor2=$_POST["var1"];


function producto($valor1, $valor2){
	$resultado=$valor1*$valor2;
	echo ("Resultado: $resultado");
}
$numero1=$valor1;
$numero2=$valor2;
producto($numero1, $numero2);
}
?>