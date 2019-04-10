<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>wilbert y karla</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="forma">
		<center><legend>Etapas de un persona</legend></center>
		<br><br>
		<form action="#" method="post">
			<label for="edad" placeholder="Ingresa tu fecha de nacimiento">Fecha en que nacio:</label>
			<input class="uno" type="number" name="nacimiento" required>
			<br><br>
			<label for="edad" placeholder="Ingresa tu fecha de nacimiento">Año actual:</label><br>
			<input class="uno" type="number" name="añoactual" required>
			<br><br>
			<center><input type="submit" name="enviar" class="enviar" value="Calcular"></center>
		</form>
	</div>
	<br><br><br>
	
	<?php  
	if (isset($_POST["enviar"])){

$nacimiento = $_POST["nacimiento"];
$añoactual = $_POST["añoactual"];

$edad = $añoactual - $nacimiento;
    

if ($edad<=10) {
    echo ("<h4>El usuario tiene de 0 a 10 años.</h4>");
    echo "<br>";
    echo ("<h4>El usuario es menor de edad</h4>");
    echo "<br>";
    echo ("<h4>El usuario es un niño</h4>");
    echo ("<br>");
    echo ("<h4>El usuario tiene : $edad</h4>");
}elseif ($edad<=15) {
    echo ("<h4>El usuario tiene de 11 a 15 años </h4>");
    echo "<br>";
    echo ("<h4>El usuario es menor de edad</h4>");
    echo "<br>";
    echo ("<h4>El usuario es un adolecente</h4>");
    echo ("<br>");
    echo ("<h4>El usuario tiene : $edad</h4>");
}elseif ($edad<=25) {
    echo ("<h4>El usuario tiene de 16 a 25 años.</h4>");
    echo "<br>";
    echo ("<h4>El usuario es mayor de edad</h4>");
    echo "<br>";
    echo ("<h4>El usuario es un joven</h4>");
    echo ("<br>");
    echo ("<h4>El usuario tiene: $edad</h4>");
}elseif ($edad<=40) {
    echo ("<h4>El usuario tiene de 26 a 40 años.</h4>");
    echo "<br>";
    echo ("<h4>El usuario es mayor de edad</h4>");
    echo "<br>";
    echo ("<h4>El usuario es un adulto</h4>");
    echo ("<br>");
    echo ("<h4>El usuario tiene: $edad</h4>");
}elseif ($edad<=50) {
    echo ("<h4>El usuario tiene de 41 a 50 años.</h4>"); 
    echo "<br>";
    echo ("<h4>El usuario es mayor de edad</h4>");
    echo "<br>";
    echo ("<h4>El usuario es un adulto</h4>");   
    echo ("<br>");
    echo ("<h4>El usuario tiene: $edad</h4>");
}elseif ($edad<=60) {
    echo ("<h4>El usuario tiene de 51 a 60 años.</h4>");
    echo "<br>";
    echo ("<h4>El usuario es mayor de edad</h4>");
    echo "<br>";
    echo ("<h4>El usuario es un adulto</h4>");
    echo ("<br>");
    echo ("<h4>El usuario tiene: $edad</h4>");
}elseif ($edad<=70) {
    echo ("<h4>El usuario tiene de 61 a 70 años.</h4>");
    echo "<br>";
    echo ("<h4>El usuario es mayor de edad</h4>");
    echo "<br>";
    echo ("<h4>El usuario es un adulto</h4>");
    echo ("<br>");
    echo ("<h4>El usuario tiene: $edad</h4>");
}elseif ($edad<=80) {
    echo ("<h4>El usuario tiene de 71 a 80 años.</h4>");
    echo "<br>";
    echo ("<h4>El usuario es mayor de edad</h4>");
    echo "<br>";
    echo ("<h4>El usuario es un adulto</h4>");
    echo ("<br>");
    echo ("<h4>El usuario tiene: $edad</h4>");
}elseif ($edad<=90) {
    echo ("<h4>El usuario tiene de 81 a 90 años.</h4>");
    echo "<br>";
    echo ("<h4>El usuario es mayor de edad</h4>");
    echo "<br>";
    echo ("<h4>El usuario es un adulto</h4>");
    echo ("<br>");
    echo ("<h4>El usuario tiene: $edad</h4>");
}else {
    echo("<h4>El usuario tiene mas de 90 años.</h4>");
    echo "<br>";
    echo ("<h4>El usuario es mayor de edad/<h>4");
    echo "<br>";
    echo ("<h4>El usuario es un adulto</h4>");
    echo ("<br>");
    echo ("<h4>El usuario tiene: $edad</h4>");
}
}
?>
</body>
</html>