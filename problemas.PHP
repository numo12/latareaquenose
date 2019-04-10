<!DOCTYPE html>
<html>
<head>
    <title>proyecto php</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<section class="forma">
		<h1>Operacines basicas de matematicas</h1>
    
	<form action="resultado.php" method="POST">
        <label for="N1">numero 1</label><br>
        <input type="number" name="n1" style="border-radius: 5px;"><br>
       <br>
        <label for="N2">numero 2</label><br>
        <input type="number" name="n2" style="border-radius: 5px;"><br>
        <br>
        <center><button type="sumbit" name="enviar" class="boton">Enviar</button></center><br>    

      <center><select name="Operaciones" class="opera">
    	<option value="sumar">Sumar</option>
    	<option value="restar">Restar</option>
    	<option value="dividir">Dividir</option>
    	<option value="multiplicar">Multiplicar</option>
    	<option value="potencia">Potencia</option>
    </select>
    </form></center>

</section>
<br>
 <section class="forma">
        <h1>raiz cuadrada</h1>
    
    <form action="resultadoraiz.php" method="POST">
        <center><label for="N1">Numero</label></center><br>
        <center><input type="number" name="n1" style="border-radius: 5px;"><br>
       <br>
        <button type="sumbit" name="enviar" class="boton">Resultados</button>    

    </form>
</section>


</body>
</html>