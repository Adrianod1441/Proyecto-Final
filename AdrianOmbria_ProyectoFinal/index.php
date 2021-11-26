<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblectatio - Inicio</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/home.css">
    
</head>
<body>
    <!-- menu -->
    <?php include 'header.php'?>

    <!-- encabezado -->
    <header class="hero-section">
        
    </header>

    <!-- contenedor mas vendidos -->
    <section class="product">
        
        <h2 class="product-category">Nuestros Juguetes</h2>
        <button class="pre-btn"><img src="img/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="img/arrow.png" alt=""></button>
        
        <div class="product-container">
        <?php 
            include "php/listaJuguetes.php";
            $lista = obtenerTodosJuguetes(false, 0); 
            foreach($lista as $p):
        ?>
            <div class="product-card">
                    <div class="product-image" style="border: 2px solid black; border-radius: 5px;">
                    <a href="product.php?id=<?php echo $p['id']?>">
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

    <!-- coleccion -->
    <section class="collection-container">
        <a href="teddy.php?paginaActual=1" class="collection">
            <img src="img/peluches-collection.jpg" alt="" class="">
            <p class="collection-tittle">peluches</p>
        </a>
        <a href="wrist.php?paginaActual=1" class="collection">
            <img src="img/muñecas-collection.jpg" alt="" class="">
            <p class="collection-tittle">muñecas</p>
        </a>
        <a href="cars.php?paginaActual=1" class="collection">
            <img src="img/coches-collection.jpg" alt="" class="">
            <p class="collection-tittle">coches</p>
        </a>
    </section>

    <!-- contenedor peluches -->
    <section class="product">
        <h2 class="product-category">Peluches</h2>
        <button class="pre-btn"><img src="img/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="img/arrow.png" alt=""></button>
        <div class="product-container">
            <?php 
                    $lista = obtenerListaJuguetes("Peluche",false, 0); 
                    foreach($lista as $p):
            ?>
            
                <div class="product-card">
                    <div class="product-image" style="border: 2px solid black; border-radius: 5px;">
                    <a href="product.php?id=<?php echo $p['id']?>">
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

    <!-- contenedor muñecas -->
    <section class="product">
            <h2 class="product-category">muñecas</h2>
            <button class="pre-btn"><img src="img/arrow.png" alt=""></button>
            <button class="nxt-btn"><img src="img/arrow.png" alt=""></button>
            <div class="product-container">
            <?php 
                    $lista = obtenerListaJuguetes("Muñeca",false, 0); 
                    foreach($lista as $p):
            ?>
            <div class="product-card">
                    <div class="product-image" style="border: 2px solid black; border-radius: 5px;">
                    <a href="product.php?id=<?php echo $p['id']?>">
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

    <!-- contenedor coches -->
    <section class="product">
        <h2 class="product-category">Coches</h2>
        <button class="pre-btn"><img src="img/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="img/arrow.png" alt=""></button>
        <div class="product-container">
            <?php 
                    $lista = obtenerListaJuguetes("Coche",false, 0); 
                    foreach($lista as $p):
            ?>
            <div class="product-card">
                    <div class="product-image" style="border: 2px solid black; border-radius: 5px;">
                    <a href="product.php?id=<?php echo $p['id']?>">
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
    
</body>
</html>