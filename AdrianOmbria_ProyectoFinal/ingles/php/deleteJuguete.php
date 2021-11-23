<?php
    session_start();

    $carrito = $_SESSION['carrito'];
    $idEliminar= $_POST['id'];
    if(!isset($idEliminar)){
        header("Location: ../shopCart.php");
    }
    $count=0;
    foreach($carrito as $p):
        if($p['id']==$idEliminar){
            array_splice($carrito, $count, 1);       
        }
        $count++;
    endforeach;

    $_SESSION['carrito'] = $carrito;
    header("Location: ../shopCart.php");
?>