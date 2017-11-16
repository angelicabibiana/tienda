<?php

session_start();

require_once("conexion.php");

class tienda
{

	public function nueva_sesion()
	{
		
		$nombre = mysql_real_escape_string($_POST['nombre']);
		$cedula = mysql_real_escape_string($_POST['cedula']);
	
		
	    $query = "SELECT 
		* 
		FROM
		usuarios
		WHERE nombre='".$nombre."' 
		AND
		cedula='".$cedula
		
		$resultado = mysql_query($query,Conectar::con());
		
		if($reg=mysql_fetch_array($resultado))
		{
			$_SESSION['nick'] = $reg['username'];	
			header("Location:logueado.php");
		}else{
			header("Location:nueva_sesion.php?usuario=no_existe");
		}
			
	}
}
?>