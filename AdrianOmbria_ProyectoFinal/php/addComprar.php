<?php
include "constantes.php";
session_start();
                                    
    $conexion = new mysqli(host_db, user_db, pass_db, db_name);
if(!$conexion){
    die("No hay conexion: ".mysqli_connect_error());
}

$user=$_SESSION["loggedId"];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$precioTotal = $_POST['preciototal'];


$consulta = $conexion->prepare("INSERT INTO historialcompra (id_usuario, direccion, telefono, preciototal) VALUES (?, ?, ?, ?)");
    
$consulta->bind_param('issd', $user, $direccion, $telefono, $precioTotal);
$resultado=$consulta->execute(); 
$consulta->close();

$_SESSION['carrito'] = (array)null;

     header("Location: ../history.php");
?>