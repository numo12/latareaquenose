<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>area y perimetro del circulo</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="forma">
	<h2>sacar el area y perimetro del circulo</h2>
	<br><br>
		<form action="#" method="post">
			<label for="radio">Radio:</label>
			<input type="number" name="radio" require title="Es elevado a al potencia">
			<br><br>
			<label for="operaciones">Elige la operación</label>
			<select name="operaciones" id="opr">
			<option value="area">Area</option>
			<option value="perimetro">Perimetro</option>
		</select>
			<br><br>
			<input type="submit" name="enviar" value="Calcular">
		</form>
	</div>
	<br><br>
	<?php 
	
	if (isset($_POST["enviar"])) {

	$radio = $_POST["radio"];
	$constante = 3.1416;
	$opc = $_POST["operaciones"];

		switch ($opc) {
			case 'area':
				$area = $constante * pow($radio, 2);
				echo "<h4>El área del circulo es: $area</h4>";
				break;

			case 'perimetro':
				$perimetro = 2 * $constante * $radio;
				echo "<h4>El perimetro del circulo es: $perimetro</h4>";
				break;

				default:

				#code...
				break;
	}
}

	 ?>
</body>
</html>