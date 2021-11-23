<?php
session_start();

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "oblectatio";
$tbl_name = "usuario";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$nick = $_POST['nick'];
$contrasena = $_POST['password'];

$sql = "SELECT * FROM $tbl_name WHERE nick = '$nick' AND password = '$contrasena'";

$result = $conexion->query($sql);

$row = $result->fetch_array(MYSQLI_ASSOC);

 if ($contrasena == $row['password']) { 

    $_SESSION['loggedId'] = $row['id']; 
    $_SESSION['loggedin'] = true;
    $_SESSION['nick'] = $nick;
    $_SESSION['password'] = $contrasena;
    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['apellidos'] = $row['apellidos'];
    $_SESSION['direccion'] = $row['direccion'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['edad'] = $row['edad'];
    $_SESSION['telefono'] = $row['telefono'];
    $_SESSION['dni'] = $row['dni'];
    $_SESSION['carrito'] = (array)null;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
   
    header("Location: ../index.php");   

 } else { 
   header("Location: ../singin.php");
 }
 mysqli_close($conexion); 
 ?>