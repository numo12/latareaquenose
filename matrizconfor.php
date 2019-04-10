
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>wilbert y karla</title>
</head>
</head>
<body>
	<form method="POST" action="#">
	<section class="forma"><h1 style="text-align: center;">ejercicios de matriz </h1>
	<CENTER><label>nombres de las personas</label></CENTER><br>
    <center><input type="text" name="var1" style="border-radius: 0px; "><br><br>
    <input type="text" name="var2" style="border-radius: 0px; "><br><br>
    <input type="text" name="var3" style="border-radius: 0px; "><br><br>
    <input type="text" name="var4" style="border-radius: 0px; "><br><br>
    <input type="text" name="var5" style="border-radius: 0px; "><br><br>
    <input type="text" name="var6" style="border-radius: 0px; "><br><br>
    <input type="text" name="var7" style="border-radius: 0px; "></center><br><br>

<center><button type="sumbit" name="enviar" class="boton">Resultados</button></center> 
</section><CENTER><H2>Resultados </H2></CENTER>
</body>
</html>



<?php  
if (isset($_POST["enviar"])){

$c1=$_POST["var1"];
$c2=$_POST["var2"];
$c3=$_POST["var3"];
$c4=$_POST["var4"];
$c5=$_POST["var5"];
$c6=$_POST["var6"];
$c7=$_POST["var7"];


//Se crea la matris.
	$nombres=array ("$c1", "$c2", "$c3", "$c4", "$c5", "$c6", "$c7");
//Se determina el número de elementos de la matriz.
	$elementos=count($nombres);
//Un bucle lleva la cuenta del paso por los elementos.
	for ($varCon=0; $varCon < $elementos; $varCon++) { 
		echo ($nombres[$varCon]."<br />");
	}
}
?>