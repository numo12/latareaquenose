
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>wilbert y karla</title>
</head>
<body>

	<form method="POST" action="#">
	<section class="forma"><h1 style="text-align: center;">Recorre matriz</h1>
<label>nombre de ciudade</label><br>
    <CENTER><input type="text" name="var1" style="border-radius: 0px; "><br><br>
    <input type="text" name="var2" style="border-radius: 0px; "><br><br>
    <input type="text" name="var3" style="border-radius: 0px; "><br><br>
    <input type="text" name="var4" style="border-radius: 0px; "><br><br>
    <input type="text" name="var5" style="border-radius: 0px; "><br><br>
    <input type="text" name="var6" style="border-radius: 0px; "></CENTER><br><br>
<center><button type="sumbit" name="enviar" class="boton">Resultados</button></center> 
</section><CENTER><H2>Resultados</H2></CENTER>
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

$ciudades=array("$c1", "$c2", "$c3", "$c4", "$c5", "$c6");
foreach ($ciudades as $clave => $valor) {
	echo ("La ciudad con el índice $clave tiene el nombre $valor. <br />" );
}
echo ("Final de la ejecución");
}
?>