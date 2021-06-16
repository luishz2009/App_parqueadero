  <?php
      require 'conexion.php';

      $sql = "SELECT identrada, placa, hentrada, idtipo FROM entradas";
      $resultado = $mysqli->query($sql);

    ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/jquery.dataTables.min.css" rel="stylesheet">

        <script src="js/bootstrap.min.js"></script> 

        <script src="js/jquery-3.6.0.min.js"></script>      
        <script src="js/jquery.dataTables.min.js"></script>

        <title>Lista de Entradas</title>
        <script>
            $(document).ready(function() {
                $('#tabla').DataTable();
              } );
        </script>
  </head>
  <body>
    <div class="container">
          <div class="row">
            <h1>Entradas</h1>
          </div>
          <div class="">
            <a href="registrar_entrada.php" class="btn btn-primary">Nuevo</a>
            <a href="index.php" class="btn btn-primary">MENU</a>
          </div>
          <table id="tabla" class="display" style="width:100%">
            <thead><!--las columnas en el thead deben ser iguales a las del tbody-->
                    <!--para poder que salga el filtrado y la paginación-->
              <tr>
                <th>ID</th>
                <th>Placa</th>
                <th>HEntrada</th>
                <th>Idtipo</th>
                
              </tr>
            </thead>
            <tbody>
              <!--fetch_assoc() para que recorra campo por campo-->
              <?php while ($fila = $resultado->fetch_assoc()) { ?>      

                <tr>
                  <td><?php echo $fila['identrada']; ?></td>
                  <td><?php echo $fila['placa']; ?></td>
                  <td><?php echo $fila['hentrada']; ?></td>
                  <td><?php echo $fila['idtipo']; ?></td>
                  

                </tr>
              <?php } ?>
            </tbody>
          </table>          
        </div>  

  </body>
</html>
