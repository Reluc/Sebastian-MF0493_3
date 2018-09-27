<?php

class conector{


	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $bbdd = "empresa";
	
	
	public $conexion;
	
	
	public function __construct(){
		
		$this->conexion = new mysqli($this->host, $this->user, $this->password, $this->bbdd);
		
		if($this->conexion->errno){
			echo ("Error conectando con la base de datos: ".$this->conexion->error);
			return false;
		}
	}
	
	public function realizaConsulta($textoConsulta, $contra){
		$resultado = $this->conexion->query($textoConsulta);
		
		while($fila = $resultado->fetch_object()){
			if($fila->contrasenha == $contra){
				$usuario = $_POST['usuario'];
				header ("Location:confirmacion/confirmacion.php?usuario=$usuario");
			}else{
				echo "<div>error al conectar</div>.";
			}
		}
		
	}

}

?>