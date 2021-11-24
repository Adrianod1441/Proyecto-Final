<?php
include "constantes.php";
session_start();
$tbl_name = "usuario";
                                    
    $conexion = new mysqli(host_db, user_db, pass_db, db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$nick = $_SESSION['nick'];
$password = hash('sha512',$_POST['password']);
$passwordNueva = hash('sha512',$_POST['passwordNueva']);

$sql = "SELECT password FROM $tbl_name WHERE nick = '$nick'";

$result = $conexion->query($sql);

$row = $result->fetch_array(MYSQLI_ASSOC);

if($password == $row['password']){
   $sql = "UPDATE $tbl_name SET password='$passwordNueva' WHERE nick='$nick'";

   $result = $conexion->query($sql);

   if ($result) { 
      header("Location: ../perfil.php");   

   } else { 
   header("Location: ../perfil.php");
   }
   mysqli_close($conexion); 
}
else{
   header("Location: ../perfil.php"); 
}
?>