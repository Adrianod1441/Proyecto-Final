<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search products for</title>
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>

    <!-- menu -->
    <?php include 'header.php'?>

    <section class="search-results">
        <h2 class="heading">search products about <span>toys</span></h2>

        <!-- productos -->
        <div class="product-containerr" style="grid-template-columns: repeat(3, 1fr);">
        <?php 
                    include "php/listaJuguetes.php";
                    $lista = obtenerTodosJuguetes(); 
                    foreach($lista as $p):
            ?>
            <div class="product-card">
                    <div class="product-image" style="border: 2px solid black; border-radius: 5px;">
                    <a href="http://localhost/GitProyectoFinal/Proyecto-Final/AdrianOmbria_ProyectoFinal/ingles/product.php?id=<?php echo $p['id']?>">
                        <img src=" <?php echo $p['imagen']?> " class="product-thumb" alt="">
                    </a>
                    </div>
                    <div class="product-info">
                        <h3 class="product-brand"><?php echo $p['nombre']?></h3>
                        <h3 class="product-short-des"><?php echo $p['marca']?></h3>
                        <span class="price"><?php echo $p['precio']?>€</span>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </section>

    <!-- footer -->
    <footer></footer>

    <!-- script -->
    <script src="js/footer.js"></script>
    <script src="js/home.js"></script>
    <script src="js/product.js"></script>
    
</body>
</html>