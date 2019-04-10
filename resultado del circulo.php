<html>
<head>
    <title>wilbert y karla</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<?php
if (!isset($_POST["control"])) {
?>
 
<?php
}
else { 
	$radio=$_POST["radio"];
	$area=3.1416* pow($radio, 2);
	echo "<h3>Resultado</h3>";
	echo "radio = $radio <br>";
	echo "area = $area <br>";
}
?>
</body>