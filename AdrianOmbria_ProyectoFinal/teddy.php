<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblectatio - Peluches</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>

    <!-- menu -->
    <?php include 'header.php'?>

    <section class="search-results">
        <h2 class="heading">buscar resultados por <span>peluches</span></h2>

        <!-- productos -->
        <div class="product-containerr" style="grid-template-columns: repeat(3, 1fr);">
        <?php 
            include "php/listaJuguetes.php";
            $numeroJuguetes = contarJuguetesTipo("Peluche");
            $numerPaginas = ceil($numeroJuguetes / tamanoPaginas);
            $lista = obtenerListaJuguetes("Peluche",true,$_GET["paginaActual"]); 
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
            <?php
                    if ($numeroJuguetes <= tamanoPaginas || $_GET["paginaActual"] == $numerPaginas){
                        echo '<a href="" class="nxt-btn" disabled style="width: 50px; height: 50px; top:700px;"><img src="img/arrow.png" alt=""></a>';
                    }else{
                        echo '<a href="teddy.php?paginaActual='; echo $_GET["paginaActual"] + 1; echo'" class="nxt-btn" style="width: 50px; height: 50px; top:700px;"><img src="img/arrow.png" alt=""></a>';
                    }

                    if ($numeroJuguetes <= tamanoPaginas || $_GET["paginaActual"] == 1){
                        echo '<a href="" class="pre-btn" disabled style=" height: 50px; top:700px;"><img src="img/arrow.png" alt=""></a>';
                    }else{
                        echo '<a href="teddy.php?paginaActual='; echo $_GET["paginaActual"] - 1; echo'" class="pre-btn" style=" height: 50px; top:700px;"><img src="img/arrow.png" alt=""></a>';
                    }
                ?>
        </div>
    </section>

    <!-- footer -->
    <footer></footer>

    <!-- script -->
    <script src="js/footer.js"></script>
    <script src="js/home.js"></script>
    
</body>
</html>