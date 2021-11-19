<?php
$nick=$_GET["nick"];
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "oblectatio";
$tbl_name = "usuario";
$mysqli = mysqli_connect($host_db, $user_db, $pass_db, $db_name);


$stmt = $mysqli->prepare("DELETE FROM $tbl_name WHERE nick = ?");
        $stmt->bind_param('s', $nick);
        
        $result=$stmt->execute(); ;
        header("Location: ../index.php");        

?>