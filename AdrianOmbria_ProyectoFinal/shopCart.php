<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblectatio - Perfil</title>
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
            <h1 class="" style="margin-top: 50px; margin-bottom: 50px;">Tu carrito personal</h1>
        </center>
            <!-- productos -->
            <div class="product-containerr" style="grid-template-columns: repeat(1, 1fr); margin-left: 20px;">
            <?php 
                foreach($_SESSION['carrito'] as $p):
            ?>
                <div class="product-card" style="margin-bottom: -150px;">
                    <div class="product-image" style="border: 2px solid black; border-radius: 5px; width: 150px; height: 250px;">
                    <a href="http://localhost/AdrianOmbria_ProyectoFinal/product.php?id=<?php echo $p['id']?>">
                        <img src=" <?php echo $p['imagen']?> " class="product-thumb" alt="" style="width: 150px; height: 250px;">
                    </a>
                        <button class="card-btn" style="background-color: #570000; color: white;">Quitar del carrito</button>
                    </div>
                    <div class="product-info" style="position: relative; left: 190px; top: -170px;">
                        <h3 class="product-brand"><?php echo $p['nombre']?></h3>
                        <h3 class="product-short-des"><?php echo $p['marca']?></h3>
                        <span class="price"><?php echo $p['precio']?>€</span>
                        <p class="des"><?php echo $p['descripcion']?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="details" style="border: 2px solid black; width: 500px; height: 250px; background-color: #faf0b8; margin-right: 20px; margin-bottom: 20px; position: relative; float: right; float: top;">
                <h1 style="position: relative; margin-top:20px; margin-left: 20px;">Total de la compra:</h1>

                <form action="php/addJuguete.php" id="contactForm" method="POST">
                    <span class="price" style="position: relative; top:60px; left: 460px; font-size: 29px;">€</span>
                    <button class="submit-btn" style="position: relative; top:80px; left: 280px; width: 200px; font-size: 20px; background-color: #c43131">Finalizar compra</button>
                </form>
            </div>
    </section>
            
    <!-- footer -->
    <!-- script -->
    <script src="js/nav.js"></script>
    <script src="js/footer.js"></script>
    <script src="js/home.js"></script>
</body>
</html>