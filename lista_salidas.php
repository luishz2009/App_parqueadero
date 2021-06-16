  <?php
      require 'conexion.php';

      //$idtipo = $_GET['idtipo'];

      $sql = "SELECT idsalida, s.placa, hsalida, s.idtipo, (s.hsalida-e.hentrada)*5 as vminuto FROM salidas s, entradas e WHERE s.idtipo=e.idtipo and s.idtipo=2 and e.idtipo=2  ";
      $resultado = $mysqli->query($sql);

     

    // $query_resta = "SELECT s.hsalida-e.hentrada as vminuto FROM salidas s, entradas e WHERE s.idtipo=e.idtipo and s.idtipo=2 and e.idtipo=2 ";

    //  $res = $mysqli->query($query_resta);

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

        <title>Lista de Salidas</title>
        <script>
            $(document).ready(function() {
                $('#tabla').DataTable();
              } );
        </script>
  </head>
  <body>
    <div class="container">
          <div class="row">
            <h1>Salidas</h1>
          </div>
          <div class="">
            <a href="registrar_salida.php" class="btn btn-primary">Nuevo</a>
            <a href="index.php" class="btn btn-primary">MENU</a>
          </div>
          <table id="tabla" class="display" style="width:100%">
            <thead><!--las columnas en el thead deben ser iguales a las del tbody-->
                    <!--para poder que salga el filtrado y la paginación-->
              <tr>
                <th>ID</th>
                <th>Placa</th>
                <th>HSalida</th>
                <th>Idtipo</th>
                <th>Vminuto</th>
              </tr>
            </thead>
            <tbody>
              <!--fetch_assoc() para que recorra campo por campo-->
              <?php while ($fila = $resultado->fetch_assoc()) { ?>      

                <tr>
                  <td><?php echo $fila['idsalida']; ?></td>
                  <td><?php echo $fila['placa']; ?></td>
                  <td><?php echo $fila['hsalida']; ?></td>
                  <td><?php echo $fila['idtipo']; ?></td>  
                             
                 
                  <td><?php echo $fila['vminuto']; ?></td>                
                  
                </tr>
              <?php } ?>
            </tbody>
          </table>          
        </div>  

  </body>
</html>
