<br><br><h1>INGRESAR</h1>
<p class="INGRESAR">
					<style>
	.INGRESAR{
		background-color: forestgreen;
				padding: 15px;
				width: 385px;
	}

</style>


<form method="post">

	<input type="text" placeholder="Usuario" name="usuarioIngreso" required>

	<input type="password" placeholder="Contraseña" name="passwordIngreso" required>
	<div style="text-align: -2 ;width:380px">
	<input type="submit" value="Enviar" name="ntn1">
	
</form>

<?php

$ingreso = new MvcController();
$ingreso -> ingresoUsuarioController();

if(isset($_GET["action"])){

	if($_GET["action"] == "fallo"){

		echo "Fallo al ingresar";

	}

	if($_GET["action"] == "fallo3intentos"){

		echo "Ha fallado 3 veces para ingresar, favor llenar el captcha";

	}

}

  ?>