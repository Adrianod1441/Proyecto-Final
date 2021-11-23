<?php

session_start();

$tbl_name = "juguete";
                                    
    $conexion = new mysqli(host_db, user_db, pass_db, db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];
$codigo = $_POST['codigo'];
$lugarcreacion = $_POST['lugarcreacion'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$fechacreacion = $_POST['fechacreacion'];
$imagen = $_POST['imagen'];

$sql = "UPDATE $tbl_name SET nombre='$nombre', marca='$marca', tipo='$tipo'
, codigo='$codigo', lugarcreacion='$lugarcreacion', precio='$precio',  descripcion='$descripcion' WHERE id='$id'";

$result = $conexion->query($sql);

 if ($result) { 
    $p['id'] = $id;
    $p['nombre'] = $nombre;
    $p['marca'] = $marca;
    $p['tipo'] = $tipo;
    $p['codigo'] = $codigo;
    $p['lugarcreacion'] = $lugarcreacion;
    $p['precio'] = $precio;
    $p['descripcion'] = $descripcion;
    $p['start'] = time();
    $p['expire'] = $p['start'] + (5 * 60);
    header("Location: ../toys.php");   

 } else { 
   header("Location: ../toys.php");
 }
 
 mysqli_close($conexion); 

?>