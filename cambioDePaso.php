<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Wilber y karla</title>
</head>
<body>
	<form method="POST" action="#">
	<section class="forma"><h1 style="text-align: center;">Funcio de cambio de paso</h1>
	<label>inserte su valor</label>
	<input type="number" name="var" style="border-radius: 6px; "><br><br>

<center><button type="sumbit" name="enviar" class="boton">Resultados</button></center> 
</section><H2>Resultados adqueridos</H2>
</body>
</html>


<?php  
if (isset($_POST["enviar"])){

$varCon=$_POST["var"];

	for ($varCon=$varCon; $varCon >=1; $varCon -=2){
		echo ($varCon."<br />");
	}

}
?>