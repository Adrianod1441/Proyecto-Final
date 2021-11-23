<?php

include "constantes.php";
function obtenerListaJuguetes($tipo,$paginado, $paginaActual){

    $tbl_name = "juguete";
                                    
    $conexion = new mysqli(host_db, user_db, pass_db, db_name);

    if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
    }

    if($paginado){
        $posicionInicial = ($paginaActual - 1) * tamanoPaginas;
        $sql = "SELECT * FROM $tbl_name WHERE tipo = '$tipo' limit $posicionInicial," . tamanoPaginas;
    }else{
        $sql = "SELECT * FROM $tbl_name WHERE tipo = '$tipo'";
    }

    $res=mysqli_query($conexion,$sql);

    $i = 0;
    while($result = mysqli_fetch_array($res)){
        $lista[$i]=$result;
        $i= $i + 1;
    }
    return $lista;
}

function obtenerTodosJuguetes($paginado, $paginaActual){

    $tbl_name = "juguete";
                                    
    $conexion = new mysqli(host_db, user_db, pass_db, db_name);

    if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
    }
    

    if($paginado){
        $posicionInicial = ($paginaActual - 1) * tamanoPaginas;
        $sql = "SELECT * FROM $tbl_name limit $posicionInicial," . tamanoPaginas;
    }else{
        $sql = "SELECT * FROM $tbl_name";
    }


    $res=mysqli_query($conexion,$sql);

    $i = 0;
    while($result = mysqli_fetch_array($res)){
        $lista[$i]=$result;
        $i= $i + 1;
    }
    return $lista;
}

function obtenerJuguete($id){

    $tbl_name = "juguete";
                                    
    $conexion = new mysqli(host_db, user_db, pass_db, db_name);

    if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
    }

    $sql = "SELECT * FROM $tbl_name WHERE id = '$id'";

    $res = mysqli_query($conexion,$sql);

    $toy = mysqli_fetch_array($res);

    return $toy;
}

function contarJuguetes(){
    
    $tbl_name = "juguete";
                                    
    $conexion = new mysqli(host_db, user_db, pass_db, db_name);

    if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
    }
    
    $sql = "SELECT count(*) FROM $tbl_name";

    $res = mysqli_query($conexion,$sql);
    
    $result = mysqli_fetch_array($res);

    return $result[0];
}

function contarJuguetesTipo($tipo){
    
    $tbl_name = "juguete";
                                    
    $conexion = new mysqli(host_db, user_db, pass_db, db_name);

    if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
    }

    $sql = "SELECT count(*) FROM $tbl_name WHERE tipo = '$tipo'";

    $res=mysqli_query($conexion,$sql);
    $result = mysqli_fetch_array($res);

    return $result[0];
}



                 
?>