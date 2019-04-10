<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cargar una lista asignados ppor el usuario</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<div class="forma">
	<?php 
			if (isset( $_POST['vec'])) 
			{
				$vector = $_POST['vec'];
				$n= count($vector);
				$suma = 0;
				echo "el vector tiene $n elementos <br><br>";
				for ($i=0; $i<$n; $i++)
					# code...
				{
					echo "$i = $vector[$i] <br><br>";
					$suma = $suma + $vector[$i];
				}
				echo "la suma es $suma <br><br>";
			}
	 ?>

	 <form action="vector2.php" method="get">
	 	Numero de elementos :
	 	<input type="text" name="n" size="5">
	 	<input type="submit" name="Aceptar">
	 </form>
	 <br>
	 <br>

	 <form action="vector2.php" method="post">
	 	<?php 
	 			if (isset($_GET['n']))
	 				$n = $_GET['n'];
	 			else
	 				$n=3;
	 			for ($i=1; $i<=$n; $i++)
	 			{
	 				echo $i;
	 			echo "<input type='text' name='vec[]' size='10'>";
	 			echo "<br>";
	 			}
	 	 ?>
	 	 <input type="submit">
	 </form>
	 </div>
</body>
</html>