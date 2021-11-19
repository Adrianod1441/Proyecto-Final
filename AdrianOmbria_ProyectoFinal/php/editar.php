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
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];
$dni = $_POST['dni'];

$sql = "UPDATE $tbl_name SET nombre='$nombre', apellidos='$apellidos'
, direccion='$direccion', email='$email', edad=$edad, telefono='$telefono', dni='$dni' WHERE nick='$nick'";

$result = $conexion->query($sql);

 if ($result) { 

   $_SESSION['nick'] = $nick;
   $_SESSION['nombre'] = $nombre;
   $_SESSION['apellidos'] = $apellidos;
   $_SESSION['direccion'] = $direccion;
   $_SESSION['email'] = $email;
   $_SESSION['edad'] = $edad;
   $_SESSION['telefono'] = $telefono;
   $_SESSION['dni'] = $dni;

    
    header("Location: ../perfil.php");   

 } else { 
  header("Location: ../perfil.php");
 }
 mysqli_close($conexion); 

?>