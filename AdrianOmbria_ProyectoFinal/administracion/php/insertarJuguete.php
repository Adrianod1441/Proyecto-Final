<?php
session_start();
$tbl_name = "juguete";
                                    
    $conexion = new mysqli(host_db, user_db, pass_db, db_name);
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

