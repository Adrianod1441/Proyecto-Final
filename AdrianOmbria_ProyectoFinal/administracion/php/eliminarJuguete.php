<?php

include "constantes.php";

$id = $_GET["id"];

$tbl_name = "juguete";
                                    
    $conexion = new mysqli(host_db, user_db, pass_db, db_name);

    $stmt = $conexion->prepare("DELETE FROM $tbl_name WHERE id = ?");
        $stmt->bind_param('s', $id);
        
    $result=$stmt->execute(); 

    header("Location: ../toys.php");        

?>