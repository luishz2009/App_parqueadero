<?php

	require 'conexion.php';

	//real_escape_string: para que los usuarios no digiten codigo malicioso
	//Brinda seguridad a los formularios de parte del backend

	$placa = $mysqli->real_escape_string($_POST['placa']);
	$hentrada = $mysqli->real_escape_string($_POST['hentrada']);
	
	$idtipo = $mysqli->real_escape_string($_POST['idtipo']);

	$sql = "INSERT INTO entradas (placa,hentrada,idtipo) VALUES ('$placa','$hentrada','$idtipo')";
	echo $sql;

	$resultado = $mysqli->query($sql);

	if ($resultado > 0) {
		echo "Registro agregado";
	} else {
		echo "Error al agregar el registro";
	}
	echo "<br>";
	echo "<a href='lista_entradas.php' class='btn btn-primary'>Lista Entradas</a>";
	



?>