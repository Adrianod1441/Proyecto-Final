<?php
include "constantes.php";

session_start();

$tbl_name = "usuario";
                                    
    $conexion = new mysqli(host_db, user_db, pass_db, db_name);

    if(!$conexion){
        die("No hay conexion: ".mysqli_connect_error());
    }

$nick = $_SESSION['nick'];

$stmt = $conexion->prepare("DELETE FROM $tbl_name WHERE nick = ?");
        $stmt->bind_param('s', $nick);
        
        $result=$stmt->execute(); 
        
        if($result){
            session_destroy();
            header("Location: ../index.php");
            
        }else{
            header("Location: ../perfil.php");
        }

?>