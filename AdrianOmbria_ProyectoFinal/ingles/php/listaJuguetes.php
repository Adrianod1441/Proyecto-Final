<?php

function obtenerListaJuguetes($tipo){

    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "";
    $db_name = "oblectatio";
    $tbl_name = "juguete";
                                    
    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

    if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
    }

    $sql = "SELECT * FROM $tbl_name WHERE tipo = '$tipo'";

    $res=mysqli_query($conexion,$sql);

    $i = 0;
    while($result = mysqli_fetch_array($res)){
        $lista[$i]=$result;
        $i= $i + 1;
    }
    return $lista;
}

function obtenerTodosJuguetes(){

    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "";
    $db_name = "oblectatio";
    $tbl_name = "juguete";
                                    
    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

    if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
    }

    $sql = "SELECT * FROM $tbl_name";

    $res=mysqli_query($conexion,$sql);

    $i = 0;
    while($result = mysqli_fetch_array($res)){
        $lista[$i]=$result;
        $i= $i + 1;
    }
    return $lista;
}

function obtenerJuguete($id){

    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "";
    $db_name = "oblectatio";
    $tbl_name = "juguete";
                                    
    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

    if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
    }

    $sql = "SELECT * FROM $tbl_name WHERE id = '$id'";

    $res = mysqli_query($conexion,$sql);

    $toy = mysqli_fetch_array($res);

    return $toy;
}


                 
?>