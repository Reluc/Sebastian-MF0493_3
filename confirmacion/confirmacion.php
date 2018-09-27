<?php
$usuario = $_GET["usuario"];

$conexion = new mysqli("localhost","root","","empresa");

if($conexion->errno){
	echo "Houbo un erro na conexión debido a: ".$conexion->error;
	die("Hubo un error, la carga de la página se ha detenido");
}

$consulta = "SELECT * FROM usuario WHERE Nombre=\"$usuario\"";

$tablaUsuario = $conexion->query($consulta);


$usuarioS = [];

while($filaUsuario = $tablaUsuario->fetch_assoc()){
	array_push($usuarioS, $filaUsuario);
}


$registrado = $usuarioS[0];


$id = $registrado["id"];
$contrasinal = $registrado["contrasenha"];






?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	id: <?php echo $id; ?>
    <br/>
    usuario: <?php echo $usuario; ?>
    <br/>
    contraseña: <?php echo $contrasinal; ?>
</body>
</html>