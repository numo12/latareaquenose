<!DOCTYPE html>
<html>
<head>
    <title>wilbert y karla</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>
    <h1 style="text-align: justify;">Resultados</h1>

</body>
</html>
<?php


if (isset($_POST["enviar"])){

$n1= $_POST["n1"];
$n2= $_POST["n2"];
$n3=$_POST["n1"];

$opc= $_POST["Operaciones"]; 

          switch ($opc){
                         case 'sumar':
                                 $resultado = $n1 + $n2;
                                 echo "La Suma de ".$n1."+".$n2." = ".$resultado;
                                 break;
                         case 'restar':
                                 $resultado = $n1 - $n2;
                                 echo "La Resta de ".$n1."-".$n2." = ".$resultado;
                                 break;
                         case 'multiplicar':
                                 $resultado = $n1 * $n2;
                                 echo "La Multiplicacion de ".$n1."*".$n2." = ".$resultado;
                                 break;
                         case 'dividir':
                                 $resultado = $n1 / $n2;
                                 echo "La Division de ".$n1."/".$n2." = ".$resultado;
                                 break;

                         case 'potencia':
                                 $resultado = pow($n1, $n2);
                                 echo "La potencia de ". $n1." = ".$resultado;
                                 break;

                         default:
                                  echo"Error....";
                                  break;
 }

}


?>
