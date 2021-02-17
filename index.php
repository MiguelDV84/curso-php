<?php
// Connectar a la base de datos

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'phpmysql';

$connect = mysqli_connect($host, $user, $password, $database);

// Comprobar que la conexion es correcta
if(mysqli_connect_error()){
    echo "La conexión a la base de datos a fallado:".mysqli_connect_error();

}


        
?>
