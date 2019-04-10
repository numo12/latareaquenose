<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Equipo</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="forma">
	<center><h2>area del triangulo</h2></center>
	<br>
		<form action="#" method="post">
			<center><label for="base">Base:</label></center>
			<center><input class="uno" type="number" name="base" required></center>
			<br><br>
			<center><label for="altura">Altura:</label><br></center>
			<center><input type="number" name="altura" require title="La constante es 2"></center>
			<br>
			<center><input type="submit" name="enviar" class="enviar" value="Enviar"></center>
		</form>
		<br><br>
	</div>

		<?php 
		if (isset($_POST["enviar"])) {

		$base = $_POST["base"];
		$altura = $_POST["altura"];
		$area= $base * $altura / 2;
		echo "<br>"; echo "<br>";
		echo "<h4>Area del triangulo es: $area</h4>";
}
		 ?>
</body>
</html>