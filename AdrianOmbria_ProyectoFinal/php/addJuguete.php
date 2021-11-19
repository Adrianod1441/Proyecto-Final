<?php
    session_start();

    $carrito = $_SESSION['carrito'];

    $elemento["id"] = count($_SESSION['carrito']);
    $elemento["cantidad"] = $_POST['cantidad'];
    $elemento["nombre"] = $_POST['nombre'];
    $elemento["marca"] = $_POST['marca'];
    $elemento["precio"] = $_POST['precio'];
    $elemento["imagen"] = $_POST['imagen'];
    $elemento["descripcion"] = $_POST['descripcion'];

    array_push($carrito, $elemento);

    $_SESSION['carrito'] = $carrito;

    header("Location: ../index.php");
?>