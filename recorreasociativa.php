
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
  border-style: solid;
  color: black;
  border-radius: 0px;
}

table td, table th {
  border-width: 2px;
  border-color: BLACK;
  border-style: solid;
  padding: 10px;
  color: BLACK;
  border-radius: 10px;
  background: rgba(96,0,0,0.4);
}
</style>

	<form method="POST" action="#">
	
<table >

	<section style="background:;padding: 1px; width: 30%; border-radius: 20px;margin: auto;" ><h1 style="text-align: center;">RECORRE ASOCIATIVA</h1></section>
	
	<tr><td><label>Indice</label></td>
		<td>Cuidad</td></tr>

    <tr><td><input type="text" name="var1" style="border-radius: 0px; "></td>
    	<td><input type="text" name="varl1" style="border-radius: 0px; "></td></tr>

    <tr><td><input type="text" name="var2" style="border-radius: 0px; "></td>
    	<td><input type="text" name="varl2" style="border-radius: 0px; "></td></tr>

    <tr><td><input type="text" name="var3" style="border-radius: 0px; "></td>
    	<td><input type="text" name="varl3" style="border-radius: 0px; "></td></tr>


    <tr><td><input type="text" name="var4" style="border-radius: 0px; "></td>
    	<td><input type="text" name="varl4" style="border-radius: 0px; "></td></tr>


    <tr><td><input type="text" name="var5" style="border-radius: 0px; "></td>
    	<td><input type="text" name="varl5" style="border-radius: 0px; "></td></tr>

 <tr><td><input type="text" name="var6" style="border-radius: 0px; "></td>
    	<td><input type="text" name="varl6" style="border-radius: 0px; "></td></tr>

</table>
  


<center><button type="sumbit" name="enviar" class="boton">Resultados</button></center> 
</table><CENTER><H2>Resultados</H2></CENTER>
</body>
</html>




<?php

if (isset($_POST["enviar"])){

$cl1=$_POST["var1"];
$cl2=$_POST["var2"];
$cl3=$_POST["var3"];
$cl4=$_POST["var4"];
$cl5=$_POST["var5"];
$cl6=$_POST["var6"];

$cl11=$_POST["varl1"];
$cl21=$_POST["varl2"];
$cl31=$_POST["varl3"];
$cl41=$_POST["varl4"];
$cl51=$_POST["varl5"];
$cl61=$_POST["varl6"];


$ciudades=array("$cl1"=> "$cl11", "$cl2"=> "$cl21", "$cl3"=> "$cl31", "$cl4"=> "$cl41", "$cl5"=> "$cl51", "$cl6"=>"$cl61");
foreach ($ciudades as $clave => $valor) {
	echo ("La ciudad con el índice $clave tiene el nombre $valor. <br />" );
}
echo ("Final de la ejecución.");
}
?>