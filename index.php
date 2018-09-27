<?php


if(isset($_POST['contrasenha']) && isset($_POST['usuario'])){
	
	require('conexion/conector.php');
	
	
	$usuario = $_POST['usuario'];
	$contra = md5($_POST['contrasenha']);
	$acceso = new conector();
	
	$consulta = "SELECT * FROM usuario WHERE nombre = \"$usuario\"";
	echo "<br>";
	$acceso->realizaConsulta($consulta, $contra);
}

?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
    <form action="#" method="POST" name="">
		<div>
			<label for="usuario">Usuario</label>
			<input type="text" name="usuario" required />
		</div>
		<div>
			<label for="contrasenha">Contraseña</label>
			<input type="password" name="contrasenha" required />
		</div>
		<div>
			<input type="submit" value="Enviar"/>
		</div>
		<div>
			<input type="reset" value="Borrar"/>
		</div>
		
	</form>
</body>
</html>