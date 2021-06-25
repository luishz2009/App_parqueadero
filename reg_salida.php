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
    <title>Document</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<h1>Consultar Placa de Salida</h1>
			<form action="buscar_placa.php" method="post" accept-charset="utf-8">
				<div class="form-group col-8 mb-3">
					<label for="placa">Placa</label>
					<input type="text" name="placa" style="text-transform:uppercase;" class="form-control" required>
				</div>
				<div class="form-group col-8 mb-3">
					<button type="submit" class="form-control btn btn-primary" name="buscar">Buscar</button>					
				</div>
			</form>
		</div>
	</div>

</body>
</html>