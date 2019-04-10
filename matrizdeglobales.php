
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>wilbert y karla</title>
</head>
</head>
<body>
	<form method="POST" action="#">
	<section class="forma"><h1 style="text-align: center;">matriz global</h1>
	<label>valor</label>
	<CENTER><input type="text" name="var" style="border-radius: 0px; "></CENTER><br><br>
	
  
<center><button type="sumbit" name="enviar" class="boton">Resultados</button></center> 
</section><CENTER><H2>Resultados</H2></CENTER>
</body>
</html>

<?php  
if (isset($_POST["enviar"])){ 
	$valor=$_POST["var"];

function cuadrado($valor){
	$cuadrado=$valor*$valor;
	echo ("El cuadrado de $valor es $cuadrado.<br />");
	echo ("La variable global numero dentro de la función vale ".$GLOBALS ["numero"]." y es de tipo ".gettype ($GLOBALS ["numero"])."<br />");
}
$valor=$valor;
$cuadrado=$valor*$valor;
$numero=$valor;
cuadrado($numero);
echo ("La variable \$numero fuera de la función vale $numero y es de tipo ".gettype ($numero)."<br />");
echo ("La variable \$cuadrado fuera de la función vale $cuadrado y es de tipo ".gettype ($cuadrado)."<br />");
}
?>
