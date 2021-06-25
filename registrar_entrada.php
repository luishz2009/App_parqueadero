<?php
	//session_start();
	require 'conexion.php';
	include 'index.php';

	date_default_timezone_set("America/Bogota");
	$fecha_actual = date("Y-m-d H:i:s");

	$sql = "SELECT idtipo,tipo FROM tipovehiculo";
	$resultado = $mysqli->query($sql);
			
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <title>Registrar Entrada</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<h1>Registrar Entrada</h1>
			<form action="guardar_entrada.php" method="post" name="entrada" id="entrada" autocomplete="off">
				<div class="form-group col-8 mb-3">
					<label for="placa">Placa</label>
					<input type="text" name="placa"  style="text-transform:uppercase;" class="form-control" required>
				</div>
				<div class="form-group col-8 mb-3">
					<label for="fecha1">HEntrada</label>
					<input type="text" name="fecha1" value="<?php echo $fecha_actual ?>"
						 class="form-control" required>
				</div>
				<div class="form-group col-8 mb-3">					
					<label for="idtipo">Tipo Vehículo</label>
					<?php
					echo "<select name='idtipo' class='form-control col-12 mb-3' 
							required>";
						
							while($fila=mysqli_fetch_array($resultado)) { 
						echo "<option value='".$fila['idtipo']."'>".$fila['tipo']."</option>";
							}				
				
					echo "</select>";
					?>

				</div>
				<div class="form-group col-8 mb-3">
					<button type="submit" class="form-control btn btn-primary" name="guardar">Guardar</button>					
				</div>
			</form>
		</div>
	</div>
    
</body>
</html>