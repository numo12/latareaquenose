<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>wilbert y karla</title>
</head>
<body>
	<form method="POST" action="#">
	<section class="forma"><h1 style="text-align: center;">logicas bit</h1>
	<label>valor 1</label>
	<input type="text" name="var" style="border-radius: 6px; "><br><br>
	<label>valor 2</label>
	<input type="text" name="var1" style="border-radius: 6px; "><br><br>
  
<center><button type="sumbit" name="enviar" class="boton">Resultados</button></center> 
</section><CENTER><H2>Resultados </H2></CENTER>
</body>
</html>


<?php  
if (isset($_POST["enviar"])){ 
	$valor1=$_POST["var"];
    $valor2=$_POST["var1"];

// Se definen los valores con los que trabajan.
$valor_1=$valor1;
$valor_2=$valor2;
// Se realizan las operaciones lógicas de bit.
$resultadoAnd=$valor_1 & $valor_2;
$resultadoOr=$valor_1 | $valor_2;
$resultadoXor=$valor_1 ^ $valor_2;
// Se muestran los valores y los resultados.
echo ("El valor 1 es: ". $valor_1."<br />");
echo ("El valor 2 es: ". $valor_2."<br />");
echo ("El resultado del valor 1 & el valor 2 es: ". $resultadoAnd."<br />");
echo ("El resultado del valor 1 | el valor 2 es: ". $resultadoOr."<br />");
echo ("El resultado del valor 1 ^ el valor 2 es: ". $resultadoXor."<br />");
}
?>