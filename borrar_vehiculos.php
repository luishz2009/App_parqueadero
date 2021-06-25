<?php
	session_start();
	require 'conexion.php';
	include 'index.php';
	//real_escape_string: para que los usuarios no digiten codigo malicioso.
	//brinda seguridad a los formularios de parte del backend
	
	

	$sqlentrada = "UPDATE entradas set fecha1 = 0 WHERE idtipo=1 or idtipo=2";
	$sqlsalida = "UPDATE salidas set fecha2 = 0 WHERE idtipo=1 or idtipo=2";


	$res_entrada = $mysqli->query($sqlentrada);
	$res_salida = $mysqli->query($sqlsalida);

	if ($res_entrada > 0 or $res_salida > 0) {
		echo "Registro Exitoso";

	} else {
		echo "Error al agregar el registro";	    
	}
	//header('location: lista_oficiales.php');
	echo "<br>";
	echo "<a href='lista_vehiculos.php' class='btn btn-primary'>Lista Vehículos</a>";
?>