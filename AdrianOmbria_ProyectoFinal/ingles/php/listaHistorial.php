<?php
include "constantes.php";
function obtenerHistorial(){

    $loggedUser = $_SESSION['loggedId'];
                                    
    $conexion = new mysqli(host_db, user_db, pass_db, db_name);

    if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
    }

    $sql = "SELECT hc.id, u.nombre as usuario, hc.fecha, hc.direccion,hc.telefono,hc.preciototal  FROM historialcompra as hc join usuario as u on hc.id_usuario=u.id where u.id=".$loggedUser;

    $res=mysqli_query($conexion,$sql);

    $i = 0;
    while($result = mysqli_fetch_array($res)){
        $lista[$i]=$result;
        $i= $i + 1;
    }
    if(isset($lista))
        return $lista;
    else
        return null;
}

                 
?>