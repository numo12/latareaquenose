<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Promedio de un alumno</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="forma">
		<legend>Reprobado aprobado</legend>
		<br><br>
		<form action="#" method="post">
			<center><label for="mat1">quimica:</label><BR><BR>
			<input class="uno" type="number" name="mate" required>
			<br><br>
			<label for="mate2">leoye:</label><BR>
			<input class="dos" type="number" name="esp" require title="">
			<br><br>
			<label for="mate3">Fisica:</label><BR>
			<input class="tres" type="number" name="fis" require title="">
			<br><br>
			<label for="mate4">algebra:</label><BR>
			<input class="cuatro" type="number" name="ccl" require title="">
			<br><br>
			<label for="mate5">Ingles:</label><BR>
			<input class="cinco" type="number" name="ing" require title="">
			<br><br>
			<label for="mate6">tics:</label><BR>
			<input class="seis" type="number" name="eco" require title=""></center>
			<br><br>
			<center><input type="submit" name="enviar" class="enviar" value="Enviar"></center>
			<br><br>
		</form>
	</div>
	<br>
	<?php
	if (isset($_POST["enviar"])) {

	$mate = $_POST["mate"];
	$esp = $_POST["esp"];
	$fis = $_POST["fis"];
	$ccl = $_POST["ccl"];
	$ing = $_POST["ing"];
	$eco = $_POST["eco"];

	$total= $mate + $esp + $fis + $ccl + $ing + $eco;
	$promedio= $total / 6;
	echo "<h3>El alumno obtuvo de promedio: $promedio</3>";

	echo "<br>";

	if ($total > 35) {
		echo ("<h4>Aprobado</h4>");
	}
	else  {
		echo  ("<h4>No aprobó</h4>");

	}
}
	 ?>

</body>
 </html>
