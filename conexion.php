<?php
//Cadena de conexión a la base de datos
$mysqli = new mysqli("localhost","root","","bdparqueadero");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ")" .$mysqli->connect_error;
}else{
    //echo "Conexión Exitosa!";
}

?>