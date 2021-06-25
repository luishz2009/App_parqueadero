<?php
session_start();
require 'conexion.php';
include 'index.php';

date_default_timezone_set("America/Bogota");
$fecha_actual = date("Y-m-d H:i:s");

$placa = strtoupper($_REQUEST['placa']);

if (empty($placa)) {
	header("location: reg_salida.php");
}else{
	$placa = $mysqli->real_escape_string($_POST['placa']);
	$placa = strtoupper($placa);
	
	$sql = "SELECT e.placa, e.fecha1, e.idtipo, t.tipo as tipo FROM entradas e, tipovehiculo t
				WHERE e.idtipo = t.idtipo AND e.placa LIKE '%$placa%' ";
	$resultado = $mysqli->query($sql);		
}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<div class="row">
			<h1></h1>
			<form action="guardar_salida.php" method="post">
				<?php while ($fila = mysqli_fetch_array($resultado)) { ?>
			
			
				<div class="form-group col-8 mb-3">
					<label for="placa">Placa</label>
					<input type="text" name="placa" class="form-control" value="<?php echo $fila['placa'] ?>" required>
				</div>
				<div class="form-group col-8 mb-3">
					<label for="tipo">tipo</label>
					<input type="hidden" name="idtipo" value="<?php echo $fila['idtipo']; ?>">
					<input type="text" name="tipo" class="form-control" value="<?php echo $fila['tipo'] ?>"  required>
				</div>
				<div class="form-group col-8 mb-3">
					<label for="fecha1">HEntrada</label>
					<input type="text" name="fecha1" class="form-control" value="<?php echo $fila['fecha1'] ?>"  required>
				</div>
				<div class="form-group col-8 mb-3">
					<label for="fecha2">HSalida</label>
					<input type="text" name="fecha2" class="form-control" value="<?php echo $fecha_actual ?>" required>
				</div>
				<?php 	} ?>
				<div class="form-group col-8 mb-3">
					<button type="submit" class="form-control btn btn-primary" name="guardar">Guardar</button>					
				</div>
			</form>
		</div>
	</div>


	
</body>
</html>