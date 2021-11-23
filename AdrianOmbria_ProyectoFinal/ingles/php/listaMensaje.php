<?php
function obtenerListaMensajes(){

    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "";
    $db_name = "oblectatio";
    $tbl_name = "mensaje";
                                    
    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

    if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
    }
    $idReceptor= $_SESSION['loggedId'];
    $sql = "SELECT admin.nick,mensaje.texto FROM admin,mensaje where admin.id=mensaje.id_emisor and mensaje.id_receptor='".$idReceptor."'";
    $res=mysqli_query($conexion,$sql);
    $i = 0;

    if( mysqli_fetch_array($res) < 1) return;
    while($result = mysqli_fetch_array($res)){
        $lista[$i]=$result;
        $i= $i + 1;
    }
    return $lista;
}
           
?>