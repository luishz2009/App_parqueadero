<?php
	require 'conexion.php';
	include 'index.php';
	//real_escape_string: para que los usuarios no digiten codigo malicioso.
	//brinda seguridad a los formularios de parte del backend

	if (isset($_POST['idtipo'])) {
		$idtipo = $mysqli->real_escape_string($_POST['idtipo']);
		$placa = $mysqli->real_escape_string($_POST['placa']);
		$fecha1 = $mysqli->real_escape_string($_POST['fecha1']);

		$placa = strtoupper($placa);

		$sql = "INSERT INTO entradas(placa,fecha1,idtipo) VALUES ('$placa','$fecha1','$idtipo')";

		$resultado = $mysqli->query($sql);

		if ($resultado > 0) {
			echo "Registro Exitoso";	            
		} else {
			echo "Error al agregar el registro";	    
		}

	}
?>
<br><br>
<button type="submit" class="btn btn-warning"><a href="registrar_entrada.php">Volver</a></button>