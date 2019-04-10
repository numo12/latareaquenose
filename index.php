<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/button.css">
<script type="text/javascript">
	
	function validar(){

		var copia = document.getElementById("txtcopia").value;
		var captcha = document.getElementById("captcha").value;
				
		if((copia == captcha && document.form.password.value=="unido" && document.form.login.value=="equipo")){
			window.open("inicio.html");
		}else{
			alert("El codigo Ingresado no coincide o usuario y password mal escritos");
		}
	}

</script>
</head>
<body style="background: url(imagen/bb.jpg); background-repeat: no-repeat; background-size: cover; box-shadow: 2px 3px 1px 2px #D1FE1C;">

<center>
<span style="color: white;"><h1>Inicio de secion</h1></span>
<br><br>
	<SCRIPT language="JavaScript" >
        </SCRIPT>

	    <form name="form" action="#" style="padding: 40px; width: 200px; height: 200px; margin: 30% 30% auto; text-align: left; margin-top: 50px; background: rgb(255, 255, 255, .5); border-radius: 1rem; margin-bottom: 20px;">
	    	<label>usuario:<input type="text" placeholder=" Registra tu nombre" name="login"></label><br>
	    	<label id="contraseña">contraseña:<input type="password" placeholder=" Escribe tu contraseña" name="password"></label><br><br><br>
	    </form>

<?php

		function codigo_captcha(){

				$k="";
				$paramentros="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
				$maximo=strlen($paramentros)-1;

				for($i=0; $i<5; $i++){

					$k.=$paramentros{mt_rand(0,$maximo)};

				}

				return $k;

		}

?>

	<tr>
		<td>
			<input type="text" name="txtcopia" id="txtcopia" size="10">
		</td>
		<td>
			<input type="text" name="captcha" id="captcha" value=<?php echo codigo_captcha(); ?> class="captcha" size="4" readonly>
		</td>
	</tr>		
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="button" name="entrar" id="entrar" value="Acceder" class="boton" onclick="validar();">
		</td>
	</tr>
	</table>
</center>

</body>
</html>