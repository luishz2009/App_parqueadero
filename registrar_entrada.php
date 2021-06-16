<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registrar Entrada</title>
<!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
       
	</head>
	<body>
		<h1 class="" align="center">Registrar Entrada</h1>
		<div class="container">
          
            <div class="row">
            <form action="guardar_entrada.php" method="post" name="entrada" id="entrada" autocomplete="off">
              <div class="form-group col-8 mb-3">
                <label for="nombre">Placa:</label>
                <input type="text" class="form-control" id="nombre" name="placa" placeholder="Introduce la placa" autofocus="required">
              </div>
              <div class="form-group col-8 mb-3">
                <label for="telefono">Hentrada:</label>
                <input type="number" class="form-control" id="hentrada" name="hentrada" required>
              </div>
              <!-- <div class="form-group col-8 mb-3">
                <label for="fecha_nac">Hsalida:</label>
                <input type="time" class="form-control" id="fecha_nac" name="fecha_nac" placeholder="Introduce la fecha_nacimiento" required>
              </div> -->
              <div class="form-group col-8 mb-3">
                <label for="tipo_vehiculo">Tipo Vehículo</label><br>
                <select name="idtipo" id="idtipo" class="form-control col-12 mb-3" required>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
              <div class="form-group col-8 mb-3">
                <button class="form-control btn btn-primary" id="guardar" name="guardar" type="submit">Guardar</button>
              </div>
             
            </form>
        </div>
         
        </div> 
	</body>
</html>