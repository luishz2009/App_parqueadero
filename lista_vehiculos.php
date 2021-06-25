<?php 
session_start();
require 'conexion.php';
include 'index.php';

$sql = "SELECT DISTINCT s.placa, e.fecha1 as fecha1, s.fecha2 as fecha2, t.tipo as tipo FROM salidas s 
			INNER JOIN entradas e ON e.idtipo = s.idtipo 
			INNER JOIN tipovehiculo t ON s.idtipo = t.idtipo 
			AND t.idtipo != 3 ORDER BY tipo ";
$resultado = $mysqli->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">    
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">

	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#tabla').DataTable();
		});
	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<h2>Lista de Vehículos Oficiales y Residentes</h2>
			<table id="tabla" class="display" style="width: 100%">
				<thead>
					<tr>						
						<th>Placa</th>
						<th>HEntrada</th>
						<th>HSalida</th>
						<th>Tipo</th>					
					</tr>					
				</thead>
				<tbody>
					<?php while ($fila = mysqli_fetch_array($resultado)) { ?>
					<tr>						
						<td><?php echo strtoupper($fila['placa']); ?></td>
						<td><?php echo $fila['fecha1']; ?></td>
						<td><?php echo $fila['fecha2']; ?></td>
						<td><?php echo $fila['tipo']; ?></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>	
</body>
</html>