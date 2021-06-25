<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">    
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	
	<title>Menu Principal</title>
	<style type="text/css" media="screen">
		.dropdown-container{
			position: relative;
		}
		.dropdown-container ul{
			position: absolute;
			max-height: 0px;
			overflow: hidden;
			transition: all 2s;
			list-style-type: none;
			left: 0px;
			padding: 0px;
		}
		.dropdown-container ul li{
			width: 200px;
		}
		.dropdown-container:hover ul{
			max-height: 400px;
		}		
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="index.php">Inicio</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="registrar_entrada.php">Registrar Entrada</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="reg_salida.php">Registrar Salida</a>
				</li>
				<li>
					<div class="dropdown-container">
						<a class="nav-link" href="">Vehículo Oficial</a>
						<ul>
							<li><a class="" href="alta_oficial.php">Alta Vehículo Oficial</a></li>
							<li><a href="lista_oficiales.php" >Lista Oficiales</a></li>
						</ul>
					</div>								
				</li>
				<li>
					<div class="dropdown-container">
						<a class="nav-link" href="">Vehículo Residente</a>
						<ul>
							<li><a class="" href="alta_residente.php">Alta Vehículo Residente</a></li>
							<li><a href="lista_residentes.php" >Lista Residentes</a></li>
						</ul>
					</div>								
				</li>
				<li class="nav-item">
					<a class="nav-link" href="comienza_mes.php">Comienza Mes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="informe_pagos_no_residentes.php">Informe No Residentes</a>
				</li>
			</ul>
		</div>
	</nav>
	<br><br>
	<div class="">
		<h2 align="center" class="center">APP PARQUEADERO</h2>		
	</div>
</body>
</html>