<?php

	require 'conexion.php';

	//real_escape_string: para que los usuarios no digiten codigo malicioso
	//Brinda seguridad a los formularios de parte del backend

	// $placa = $mysqli->real_escape_string($_POST['placa']);
	// $hsalida = $mysqli->real_escape_string($_POST['hsalida']);	
	// $idtipo = $mysqli->real_escape_string($_POST['idtipo']);
	//$vminuto = $mysqli->real_escape_string($_POST['vminuto']);

	
	

	$sqlentrada = "UPDATE entradas set hentrada=0 WHERE idtipo=1 or idtipo=2";
	$sqlsalida = "UPDATE salidas set hsalida=0 WHERE idtipo=1 or idtipo=2";

	//echo $sql;

	$resultado = $mysqli->query($sqlentrada);
	$res =  $mysqli->query($sqlsalida);



	if ($resultado > 0 or $res > 0) {
		echo "Registro agregado";
	} else {
		echo "Error al agregar el registro";
	}
	echo "<br>";
	echo "<a href='lista_vehiculos.php' class='btn btn-primary'>Lista Entradas y Salidas</a>";
	



?>