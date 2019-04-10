<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>wilrbet y karla</title>
	<link rel="stylesheet" href="estilo2.css">
</head>
<body>

	
		<div class="login">
			<h3>no ejecutadar</h3>
			<br>
			<br>
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
				echo "Numero $numero ";
			}
			}
	 ?>
</body>
</html>