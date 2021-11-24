<?php
include "constantes.php";

$nick = $_GET["nick"];

$tbl_name = "usuario";
                                    
    $conexion = new mysqli(host_db, user_db, pass_db, db_name);

    $stmt = $conexion->prepare("DELETE FROM $tbl_name WHERE nick = ?");
            $stmt->bind_param('s', $nick);
            
    $result=$stmt->execute(); 

    header("Location: ../index.php");        

?>