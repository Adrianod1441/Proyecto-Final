<?php
include "constantes.php";
session_start();

$tbl_name = "mensaje";
                                    
    $conexion = new mysqli(host_db, user_db, pass_db, db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$nick = $_POST['nick'];
$texto = $_POST['texto'];

$sql = "SELECT id FROM usuario where nick='".$nick."'";

$res=mysqli_query($conexion,$sql);

$idReceptor=mysqli_fetch_array($res)['id'];

$idEmisor=$_SESSION['loggedId'];

$sql = "INSERT INTO $tbl_name (id_emisor, id_receptor, texto) 
    VALUES ($idEmisor, $idReceptor, '$texto')";

if (mysqli_query($conexion, $sql)) {
      echo "Nuevo mensaje creado correctamente";
      
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

header("Location: ../perfil.php");

?>
