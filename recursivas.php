
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>wilbert y karla</title>
</head>
<body>
	<form method="POST" action="#">
	<section class="forma"><h1 style="text-align: center;">recursivas</h1>
	<label>valor</label>
	<CENTER><input type="text" name="var" style="border-radius: 0px; "></CENTER><br><br>
	
  
<center><button type="sumbit" name="enviar" class="boton">Resultados</button></center> 
</section><CENTER><H2>Resultados</H2></CENTER>
</body>
</html>


<?php  
if (isset($_POST["enviar"])){ 
	$valor1=$_POST["var"];

function factorial ($num){
	if ($num==0) {
		return 1;
	} else {
		$valor = $num * factorial ($num-1);
		return $valor;
	}
}
$original=$valor1;
$valor=factorial($original);
echo ("El factorial de $original es $valor.<br />");
}
?>