<?php
// Connectar a la base de datos

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'phpmysql';

$connect = mysqli_connect($host, $user, $password, $database);

// Comprobar conexion con mysqli_connect_error
if(mysqli_connect_errno()){
    echo "La conexion a la base de datos a ha fallado".mysqli_connect_error();
} else {
    echo "Conexion realizada correctamente";
}

// Consulta para configurar la codificación de caracteres.
mysqli_query($connect, "SET NAMES 'UTF8'");

// Consulta SELECT DESDE PHP
$query = mysqli_query($connect, "SELECT * FROM notas");
$notas = mysqli_fetch_assoc($query);

while($nota = $notas){
    
}

var_dump($nota);
        
?>
