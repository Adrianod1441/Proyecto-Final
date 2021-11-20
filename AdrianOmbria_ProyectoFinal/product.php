<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblectatio - Juguete</title>
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/nav.css">
</head>
<body>
    <!-- menu -->
    <?php include 'header.php'?>

    <!-- informacion del producto -->

    <?php 
        include "php/listaJuguetes.php";
        $toy = obtenerJuguete($_GET["id"]); 
    ?>

    <section class="product-details">
        <div class="image">
            <img src=" <?php echo $toy['imagen']?> " alt="" class="image">
        </div>
        <div class="details">
            <h2 class="product-brand"><?php echo $toy["nombre"]?></h2>

            <p class="product-short-des"><?php echo $toy["marca"]?></p>

            <p class="product-short-des"><?php echo $toy["lugarcreacion"]?></p>
            
            <span class="product-price"><?php echo $toy["precio"]?>€</span>

            <!-- descripcion del producto -->
            <p class="des" style="margin-top:40px"><?php echo $toy["descripcion"]?></p>

            <form action="php/addJuguete.php" id="contactForm" method="POST">

                <select id="cantidad" name="cantidad" required="required">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>

                <input id="nombre" type="hidden" name="nombre" value="<?php echo $toy["nombre"]?>">
                <input id="marca" type="hidden" name="marca" value="<?php echo $toy["marca"]?>">
                <input id="precio" type="hidden" name="precio" value="<?php echo $toy["precio"]?>">
                <input id="imagen" type="hidden" name="imagen" value="<?php echo $toy["imagen"]?>">
                <input id="descripcion" type="hidden" name="descripcion" value="<?php echo $toy["descripcion"]?>">

                <?php
                    if (isset($_SESSION["nick"])){
                        echo '<button class="cart-btn" style="margin-top:50px">añadir al carrito</button>';
                    }else{
                        echo '<button class="cart-btn" style="margin-top:50px" disabled>añadir al carrito</button>';
                    }
                ?>
            </form>
                
        </div>
    </section>

    <!-- contenedor coches -->
    <section class="product">
        <h2 class="product-category">Coches</h2>
        <button class="pre-btn"><img src="img/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="img/arrow.png" alt=""></button>
        <div class="product-container">
            <?php 
                    $lista = obtenerListaJuguetes("Coche"); 
                    foreach($lista as $p):
            ?>
            <div class="product-card">
                    <div class="product-image" style="border: 2px solid black; border-radius: 5px;">
                    <a href="http://localhost/GitProyectoFinal/Proyecto-Final/AdrianOmbria_ProyectoFinal/product.php?id=<?php echo $p['id']?>">
                        <img src=" <?php echo $p['imagen']?> " class="product-thumb" alt="">
                    </a>
                        <button class="card-btn">Añadir al carrito</button>
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
    <h2 class="product-category">Muñecas</h2>
        <button class="pre-btn"><img src="img/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="img/arrow.png" alt=""></button>
        <div class="product-container">
            <?php 
                    $lista = obtenerListaJuguetes("Muñeca"); 
                    foreach($lista as $p):
            ?>
                <div class="product-card">
                    <div class="product-image" style="border: 2px solid black; border-radius: 5px;">
                    <a href="http://localhost/GitProyectoFinal/Proyecto-Final/AdrianOmbria_ProyectoFinal/product.php?id=<?php echo $p['id']?>">
                        <img src=" <?php echo $p['imagen']?> " class="product-thumb" alt="">
                    </a>
                        <button class="card-btn">Añadir al carrito</button>
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

    <!-- contenedor peluches -->
    <section class="product">
    <h2 class="product-category">Peluches</h2>
        <button class="pre-btn"><img src="img/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="img/arrow.png" alt=""></button>
        <div class="product-container">
            <?php 
                    $lista = obtenerListaJuguetes("Peluche"); 
                    foreach($lista as $p):
            ?>
            <div class="product-card">
                    <div class="product-image" style="border: 2px solid black; border-radius: 5px;">
                    <a href="http://localhost/GitProyectoFinal/Proyecto-Final/AdrianOmbria_ProyectoFinal/product.php?id=<?php echo $p['id']?>">
                        <img src=" <?php echo $p['imagen']?> " class="product-thumb" alt="">
                    </a>
                        <button class="card-btn">Añadir al carrito</button>
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