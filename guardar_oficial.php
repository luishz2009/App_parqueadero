<?php
	session_start();
	require 'conexion.php';
	include 'index.php';
	//real_escape_string: para que los usuarios no digiten codigo malicioso.
	//brinda seguridad a los formularios de parte del backend
	
	$placa = $mysqli->real_escape_string($_POST['placa']);		

	$sql = "INSERT INTO oficial(placa) VALUES ('$placa')";

	$resultado = $mysqli->query($sql);

	if ($resultado > 0) {
		echo "Registro Exitoso";

	} else {
		echo "Error al agregar el registro";	    
	}
	//header('location: lista_oficiales.php');
?>
<br><br>
<button type="submit" class="form-control btn btn-warning"><a href="lista_oficiales.php" >Lista Oficiales</a></button>

