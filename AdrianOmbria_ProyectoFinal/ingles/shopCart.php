<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblectatio - Cart</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/perfil.css">

    <script type="text/javascript">
            function confirmarBajaJuguete() {
                var mensaje = confirm("¿Desea Eliminar el juguete del carrito?");
                location.href="php/bajaJuguete.php";
                
                if (mensaje) {
                    alert("¡Juguete eliminado!");
                }else {
                    alert("¡No se ha realizado ninguna acción!");
                }
            }
    </script>
</head>
<body>
    
    <!-- menu -->
    <?php include 'header.php'?>

    <!-- datos usuario -->
    <section class="search-results">
        <center>
            <h1 class="" style="margin-top: 50px; margin-bottom: 50px;">Your personal shop cart</h1>
        </center>
            <!-- productos -->
            <div class="product-containerr" style="grid-template-columns: repeat(1, 1fr); margin-left: 20px;">
            <?php 
                foreach($_SESSION['carrito'] as $p):
            ?>
                <div class="product-card" style="margin-bottom: -150px;">
                    <form action="php/deleteJuguete.php" method="POST">
                        <div class="product-image" style="border: 2px solid black; border-radius: 5px; width: 150px; height: 250px;">
                            <a href="http://localhost/GitProyectoFinal/Proyecto-Final/AdrianOmbria_ProyectoFinal/ingles/product.php?id=<?php echo $p['id']?>">
                                <img src=" <?php echo $p['imagen']?> " class="product-thumb" alt="" style="width: 150px; height: 250px;">
                            </a>
                            <input id="id" type="hidden" name="id" value="<?php echo $p["id"]?>">
                            <button class="card-btn" type="submit" style="background-color: #570000; color: white;">Remove from cart</button>
                        </div>
                    </form>
                    <div class="product-info" style="position: relative; left: 190px; top: -170px;">
                        <h3 class="product-brand"><?php echo $p['nombre']?></h3>
                        <h3 class="product-short-des"><?php echo $p['marca']?></h3>
                        <span class="price"><?php echo $p['precio']?>€</span>
                        <p class="des"><?php echo $p['descripcion']?></p>
                        <h3 class="product-short-des">x<?php echo $p['cantidad']?></h3>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="details" style="border: 2px solid black; width: 500px; height: 340px; background-color: #faf0b8; margin-right: 20px; margin-bottom: 20px; position: relative; float: right; float: top;">
                <?php
                    $totalCompra=0;

                    foreach($_SESSION['carrito'] as $p):

                        $totalCompra = $totalCompra + $p['cantidad'] * $p['precio'];

                    endforeach;
                ?>
                 <h1 style="position: relative; margin-top:20px; margin-left: 20px; margin-bottom:15px;">Total purchase: <?php echo $totalCompra?>€</h1>

                <form action="php/addComprar.php" id="contactForm" method="POST">
                    <h3 style="margin-left: 20px;">Address</h3> <input id="direccion" style="margin-left: 20px; border: 2px solid black;" type="text" name="direccion" value=<?php echo $_SESSION['direccion']?>>
                    <h3 style="margin-left: 20px;">Phone</h3> <input id="telefono" style="margin-left: 20px; border: 2px solid black;" type="text" name="telefono" value=<?php echo $_SESSION['telefono']?>>
                    <input id="totalcompra" type="hidden" name="totalcompras" value=<?php echo $totalCompra?>>
                    <button class="submit-btn" style="position: relative; top:10px; left: 280px; width: 200px; font-size: 20px; background-color: #c43131">Finalizar compra</button>
                </form>
            </div>
    </section>

    <!-- script -->
    <script src="js/nav.js"></script>
    <script src="js/footer.js"></script>
    <script src="js/home.js"></script>
</body>
</html>