<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "oblectatio";
$tbl_name = "usuario";

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
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
        }

?>