<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vector con php</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<div class="forma">
	<?php 
			if (isset( $_POST['vec']))
			 {
				$vector = $_POST['vec']; $n = count($vector); $suma=0;
				echo "<b>el vector tiene $n elementos <b><br>";
				for ($i=0; $i<$n; $i++)
				 { 
					echo "$i = $vector[$i] <br>";
					$suma = $suma + $vector[$i];
				}
				echo "La suma es $suma <br>";
				echo "<br>";
			}
	 ?>

	 <form action="vector.php" method="post">
	 	<?php 
	 			$n=8;
	 			for ($i=0; $i<=$n; $i++) 
	 			{ 
	 				echo $i; echo "<input type='text' name='vec[]' size='10'>";echo "<br>";
	 			}

	 	 ?>
	 	 <input type="submit">
	 </form>
	 </div>
</body>
</html>