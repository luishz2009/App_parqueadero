<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Alta Oficial</title>
<!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
       
	</head>
	<body>
		<h1 class="" align="center">Alta Vehículo Oficial</h1>
		<div class="container">
          
            <div class="row">
              <div>
                 <a href="index.php" class="btn btn-primary">MENU</a>
              </div>
            <form action="guardar_residente.php" method="post" name="salida" id="salida" autocomplete="off">
              <div class="form-group col-8 mb-3">
                <label for="nombre">Placa:</label>
                <input type="text" class="form-control" id="nombre" name="placa" placeholder="Introduce la placa" autofocus="required">
              </div>
                           
              <!-- <div class="form-group col-8 mb-3">
                <label for="tipo_vehiculo">Tipo Vehículo</label><br>
                <select name="idtipo" id="idtipo" class="form-control col-12 mb-3" required>
                  <option value="1">1</option>
                  
                </select>
              </div> -->
             <!--  <div class="form-group col-8 mb-3">
                <label for="fecha_nac">Vminuto:</label>
                <input type="number" class="form-control" id="vminuto" name="vminuto" required>
              </div> -->
              <div class="form-group col-8 mb-3">
                <button class="form-control btn btn-primary" id="guardar" name="guardar" type="submit">Guardar</button>
              </div>
             
            </form>
        </div>
         
        </div> 
	</body>
</html>