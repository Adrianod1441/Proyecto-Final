<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "oblectatio";
$tbl_name = "usuario";

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conexion){
    die("No hay conexion: ".mysqli_connect_error());
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

$consulta = $conexion->prepare("INSERT INTO $tbl_name (nick, password, nombre, apellidos, direccion, email, edad, telefono, dni) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
$consulta->bind_param('ssssssiss', $nick, $password, $nombre, $apellidos, $direccion, $email, $edad, $telefono, $dni);
$resultado=$consulta->execute(); 
$consulta->close();

if($resultado){
     header("Location: ../singin.php");
}else{
     header("Location: ../singup.php");
}
?>

