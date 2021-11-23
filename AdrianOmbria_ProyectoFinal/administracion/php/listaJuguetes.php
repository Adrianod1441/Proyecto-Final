<?php

function obtenerListaJuguetes(){

    $tbl_name = "juguete";
                                    
    $conexion = new mysqli(host_db, user_db, pass_db, db_name);

    if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
    }

    $sql = "SELECT * FROM $tbl_name";

    $res=mysqli_query($conexion,$sql);

    $i = 0;
    while($result = mysqli_fetch_array($res)){
        $listaJuguete[$i]=$result;
        $i= $i + 1;
    }
    return $listaJuguete;
}

                 
?>