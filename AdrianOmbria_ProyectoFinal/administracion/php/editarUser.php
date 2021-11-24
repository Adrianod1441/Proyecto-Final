<?php
include "constantes.php";

session_start();

$tbl_name = "usuario";
                                    
    $conexion = new mysqli(host_db, user_db, pass_db, db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$nick = $_POST['nick'];
$password = $_POST['password'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];
$dni = $_POST['dni'];

$sql = "UPDATE $tbl_name SET password='$password', nombre='$nombre', apellidos='$apellidos'
, direccion='$direccion', email='$email', edad='$edad', telefono='$telefono', dni='$dni' WHERE nick='$nick'";

$result = $conexion->query($sql);

 if ($result) { 
    $p['nick'] = $nick;
    $p['password'] = $password;
    $p['nombre'] = $nombre;
    $p['apellidos'] = $apellidos;
    $p['direccion'] = $direccion;
    $p['email'] = $email;
    $p['edad'] = $edad;
    $p['telefono'] = $telefono;
    $p['dni'] = $dni;
    $p['start'] = time();
    $p['expire'] = $p['start'] + (5 * 60);
    header("Location: ../index.php");   

 } else { 
   header("Location: ../index.php");
 }
 
 mysqli_close($conexion); 

?>