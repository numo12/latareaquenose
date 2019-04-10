<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>wilbert y karla</title>
</head>
<body>
<style type="text/css">
	table {

  width: 30%;
  margin: auto;
  border-width: 0px;
  color: blue;
  border-radius: 0px;
}

table td, table th {
  border-width: 2px;
  border-color: purple;
  border-style: solid;
  padding: 10px;
  color: red;
  border-radius: 0px;
  background: rgba(96,0,0,0.4);
}
</style>

	<form method="POST" action="#">
<table >

	<section style="background: ;padding: 1px; width: 30%; border-radius: 0px;margin: auto;" ><h1 style="text-align: center;">continuar bucle</h1></section>
	
	<tr><td><CENTER><label>Indices</label></CENTER></td>
		<td>Ciudad</td></CENTER></tr>

    <tr><td><input type="text" name="ind1" style="border-radius: 0px; "></td>
    	<td><input type="text" name="cui1" style="border-radius: 0px; "></td></tr>

    <tr><td><input type="text" name="ind2" style="border-radius: 0px; "></td>
    	<td><input type="text" name="cui2" style="border-radius: 0px; "></td></tr>

    <tr><td><input type="text" name="ind3" style="border-radius: 0x; "></td>
    	<td><input type="text" name="cui3" style="border-radius: 0x; "></td></tr>


    <tr><td><input type="text" name="ind4" style="border-radius: 0px; "></td>
    	<td><input type="text" name="cui4" style="border-radius: 0px; "></td></tr>


    <tr><td><input type="text" name="ind5" style="border-radius: 0px; "></td>
    	<td><input type="text" name="cui5" style="border-radius: 0px; "></td></tr>


</table><BR>
<center><button type="sumbit" name="enviar" class="boton">Resultados</center> 

<CENTER><H2>Resultados esperados</H2></CENTER>




</body>
</html>


<?php
if (isset($_POST["enviar"])){

$ind1=$_POST["ind1"];
$ind2=$_POST["ind2"];
$ind3=$_POST["ind3"];
$ind4=$_POST["ind4"];
$ind5=$_POST["ind5"];

$cui1=$_POST["cui1"];
$cui2=$_POST["cui2"];
$cui3=$_POST["cui3"];
$cui4=$_POST["cui4"];
$cui5=$_POST["cui5"];



$ciudades=array("$ind1"=> "$cui1", "$ind2"=> "$cui2", "$ind3"=> "$cui3", "$ind4"=> "$cui4", "$ind5"=> "$cui5");
foreach ($ciudades as $clave => $valor) {
	if ($valor=="$cui5") continue;
	echo ("La ciudad con el índice $clave tiene el nombre $valor. <br />" );
}
echo ("Final de la ejecución.");
}
?>