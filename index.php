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

} else{
    echo "Conexion realizada a la base de datos".'<br/><br/>';
}

// Consulta para configurar la codificación de caracteres.
$sql = "SET NAMES 'utf8'";
mysqli_query($connect, $sql);

// Consulta SELECT desde php
$sql = "SELECT * FROM notas";
$query = mysqli_query($connect, $sql);


while($nota = mysqli_fetch_assoc($query)){
    // var_dump($nota);
    echo "<h2>".$nota ['titulo']."</h2>";
    echo $nota ['descripcion'].'<br/>';
    echo $nota ['color'].'<br/>';
}

// Insertar datos en la base de datos desde PHP
$sql = "INSERT INTO notas VALUES (null, 'Nota creada desde php', 'Esto es una PHP', 'green')";
$insert = mysqli_query($connect, $sql);

if($insert){
    echo "Datos insertados correctamente";

}else{
    echo "Error: ".mysqli_error($connect);
}


        
?>
