<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>wilbert y karla </title>
		<link rel="stylesheet" href="estilo2.css">

</head>
<body>

		<div class="login">
				<h3>Funcion ejecutada</h3>
			<form action="" method="post">
				<label for="function">valor:</label>
			<input  type="number" name="function" required>
			<br><br>
			<input  class="uno" type="submit" name="enviar" value="Enviar">
			</form>
		</div>
	
	<?php 
	if (isset($_POST["enviar"])) {
	
	
			function mostrarUnNumero(){
				$function=$_POST["function"];
				$numero=$function;
				echo "<h4>Numero $numero </h4>";
			}
			mostrarUnNumero();
		}
	 ?>
</body>
</html>