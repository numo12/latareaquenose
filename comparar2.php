<html>
<head>
   <title>wilberth y Karla</title>
</head>
<body style="background: rgb(104, 139, 230);">
<H1>Comparar Dos numeros</H1>
<p>
<?php
/* LEER VARIABLES DE $_GET */
$n1=intval($_GET['numero1']);
$n2=intval($_GET['numero2']);

if ($n1>$n2){
    echo "<h4>El primer número (".$n1.") es mayor que el segundo (".$n2.")</h4>";
}
elseif ($n1==$n2){
    echo "<h4>El primer número (".$n1.") es igual al segundo (".$n2.")</h4>";
}
else{
    echo "<h4>El primer número (".$n1.") es menor que el segundo (".$n2.")</h4>";
}
 ?>
</p>
<br>
</body>
</html>
