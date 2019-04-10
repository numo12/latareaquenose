
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
  border-radius: 20px;
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

	<section style="background: ;padding: 1px; width: 30%; border-radius: 20px;margin: auto;" ><h1 style="text-align: center;">Recorrer Anidados</h1></section>
	
	<tr><td><label>Ciudad</label></td>
		<td>Nombre</td>
		<td>Edad</td>
		<td>Telefono</td>

	</tr>

    <tr><td><input type="text" name="ind1" style="border-radius: 0px; "></td>
    	<td><input type="text" name="cui1" style="border-radius: 0px; "></td>
    	<td><input type="number" name="ed1" style="border-radius: 0px; "></td>
        <td><input type="text" name="tel1" style="border-radius: 0px; "></td></tr>


    <tr><td><input type="text" name="ind2" style="border-radius: 0px; "></td>
    	<td><input type="text" name="cui2" style="border-radius: 0px; "></td>    	
    	<td><input type="number" name="ed2" style="border-radius: 0px; "></td>
    	<td><input type="text" name="tel2" style="border-radius: 0px; "></td></tr>

    <tr><td><input type="text" name="ind3" style="border-radius: 0px; "></td>
    	<td><input type="text" name="cui3" style="border-radius: 0px; "></td>
    	<td><input type="number" name="ed3" style="border-radius: 0px; "></td>
    	<td><input type="text" name="tel3" style="border-radius: 0px; "></td></tr>


</table>
<center><button type="sumbit" name="enviar" class="boton">Resultados</button></center> 

</section><CENTER><H2>Resultados</H2></CENTER>
</body>
</html>

<?php 
if (isset($_POST["enviar"])){

$ind1=$_POST["ind1"];
$ind2=$_POST["ind2"];
$ind3=$_POST["ind3"];


$cui1=$_POST["cui1"];
$cui2=$_POST["cui2"];
$cui3=$_POST["cui3"];

$tel1=$_POST["tel1"];
$tel2=$_POST["tel2"];
$tel3=$_POST["tel3"];

$ed1=$_POST["ed1"];
$ed2=$_POST["ed2"];
$ed3=$_POST["ed3"];

$amigos=array("$ind1"=>array("nombre"=>"$cui1", "edad"=>"$ed1", "telefono"=>"$tel1"),
	"$ind2"=>array("nombre"=>"$cui2", "edad"=>"$ed2", "telefono"=>"$tel2"),
	"$ind3"=>array("nombre"=>"$cui3", "edad"=>"$ed3", "telefono"=>"$tel3"));
foreach ($amigos as $ciudad => $cadaUno) {
	echo ("En $ciudad tiene el amigo:<br />");
	foreach ($cadaUno as $clave => $valor) {
		echo ($clave.": ".$valor."<br />");
	}
}
echo ("Final de la ejecución.");
}
?>