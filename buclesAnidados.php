
									<!DOCTYPE html>
									<link rel="stylesheet" type="text/css" href="estilo.css">
<html>
<meta charset="utf-8">
	<head>
		<title></title>
	</head>
<body>
	
	<?php
		for ($piso=$_POST["inicio"];$piso<=$_POST["final"];$piso++){
			for ($puerta=$_POST["pi"];$puerta<=$_POST["pfin"];$puerta++){
				echo ("Piso: $piso. - Puerta: $puerta.<br/>");
			}
		}
	?>
	
</body>

</html>