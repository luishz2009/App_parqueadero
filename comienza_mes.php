<?php
session_start();
require 'conexion.php';
include 'index.php';

date_default_timezone_set("America/Bogota");
$fecha_actual = date("Y-m-d H:i:s");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comienza mes</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<h1>Comienza mes</h1>
			<form action="borrar_vehiculos.php" method="post" accept-charset="utf-8">
				<div class="form-group col-8 mb-3">
					<h3>Borrar Entradas y Salidas </h3>
					<h3>Vehículos Oficiales y Residentes</h3>
				</div>
				<div class="form-group col-8 mb-3">					
					<input type="hidden" name="idtipo" value="<?php echo $fila['idtipo']; ?>">				
				</div>
				<div class="form-group col-8 mb-3">
					<button type="submit" class="form-control btn btn-primary" name="buscar">Borrar</button>					
				</div>
			</form>
		</div>
	</div>
</body>
</html>