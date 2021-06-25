<?php
	session_start();
	require 'conexion.php';
	include 'index.php';
	//real_escape_string: para que los usuarios no digiten codigo malicioso.
	//brinda seguridad a los formularios de parte del backend

	if (isset($_POST['idtipo'])) {
		$idtipo = $mysqli->real_escape_string($_POST['idtipo']);
		$tipo = $mysqli->real_escape_string($_POST['tipo']);
		$placa = $mysqli->real_escape_string($_POST['placa']);
		$fecha1 = $mysqli->real_escape_string($_POST['fecha1']);
		$fecha2 = $mysqli->real_escape_string($_POST['fecha2']);

		$date1 = strtotime($fecha1);
		$date2 = strtotime($fecha2);
		
		//Para obtener el resultado de la diferencia en fechas en minutos (con 2 decimales)
		$diferencia = round((($date2-$date1)/60),2);

		if ($tipo =='OFICIAL') {
			$valor_pago = round($diferencia*0);
		} elseif ($tipo == 'RESIDENTE' ) {
			$valor_pago = round(($diferencia*0.05),2);
		}else {
			$valor_pago = round($diferencia*1000);
		}
		

		$sql = "INSERT INTO salidas(placa,fecha2,idtipo,diferencia,valor_pago) VALUES ('$placa','$fecha2','$idtipo','$diferencia','$valor_pago')";

		$resultado = $mysqli->query($sql);

		if ($resultado > 0) {
			echo "Registro Exitoso";

		} else {
			echo "Error al agregar el registro";	    
		}


	}

?>
<br><br>
<button type="submit"><a href="reg_salida.php" >Volver</a></button>

