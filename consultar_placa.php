<?php
	require 'conexion.php';
	//real_escape_string: para que los usuarios no digiten codigo malicioso.
	//brinda seguridad a los formularios de parte del backend

	
	if (isset($_REQUEST['btn_consultar'])) {
		
		if (isset($_GET['placa'])) {		
			$placa = $mysqli->real_escape_string($_GET['placa']);

			$placa = strtoupper($placa);

			$sql = "SELECT placa,fecha1 FROM entradas WHERE placa='$placa'";
			echo $sql;
			$resultado = $mysqli->query($sql);
			
			if ($resultado) {
				
				echo "La placa se encuentra registrada";
			}else {
				echo "ERROR La placa NO se encuentra registrada";	    
			}

		}
		//header('location:registrar_salida.php');
		
	}

	
?>
<br><br>
<button type="submit" class="btn btn-warning"><a href="registrar_salida.php">Volver</a></button>