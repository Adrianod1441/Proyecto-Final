<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "oblectatio";
$tbl_name = "juguete";

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conexion){
    die("No hay conexion: ".mysqli_connect_error());
}

$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];
$codigo = $_POST['codigo'];
$lugarcreacion = $_POST['lugarcreacion'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$imagen = $_POST['base64'];

$consulta = $conexion->prepare("INSERT INTO $tbl_name (nombre, marca, tipo, codigo, lugarcreacion, precio, descripcion, imagen) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    
$consulta->bind_param('sssssiss', $nombre, $marca, $tipo, $codigo, $lugarcreacion, $precio, $descripcion, $imagen);
$resultado=$consulta->execute(); 
$consulta->close();

if($resultado){
     header("Location: ../toys.php");
}else{
     header("Location: ../insertToy.php");
}
?>

