<?php

	require 'conexion.php';

	//real_escape_string: para que los usuarios no digiten codigo malicioso
	//Brinda seguridad a los formularios de parte del backend

	$placa = $mysqli->real_escape_string($_POST['placa']);
	
	//$idtipo = $mysqli->real_escape_string($_POST['idtipo']);
	//$vminuto = $mysqli->real_escape_string($_POST['vminuto']);

	
	

	$sql = "INSERT INTO residente (placa) VALUES ('$placa')";
	//echo $sql;

	$resultado = $mysqli->query($sql);



	if ($resultado > 0) {
		echo "Registro agregado";
	} else {
		echo "Error al agregar el registro";
	}
	echo "<br>";
	echo "<a href='lista_residentes.php' class='btn btn-primary'>Lista Residentes</a>";
	



?>