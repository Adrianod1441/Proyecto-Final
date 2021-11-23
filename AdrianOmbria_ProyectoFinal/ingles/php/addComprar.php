<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "oblectatio";

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conexion){
    die("No hay conexion: ".mysqli_connect_error());
}

$user=$_SESSION["loggedId"];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$precioTotal = $_POST['totalcompras'];

$consulta = $conexion->prepare("INSERT INTO historialcompra (id_usuario, direccion, telefono, preciototal) VALUES (?, ?, ?, ?)");
    
$consulta->bind_param('issb', $user, $direccion, $telefono, $precioTotal);
$resultado=$consulta->execute(); 
$consulta->close();

$_SESSION['carrito'] = (array)null;

    header("Location: ../index.php");
?>