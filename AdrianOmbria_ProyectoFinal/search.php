<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar productos por</title>
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>

    <!-- menu -->
    <?php include 'header.php'?>

    <section class="search-results">
        <h2 class="heading">buscar resultados por <span>producto</span></h2>

        <!-- productos -->
        <div class="product-containerr" style="grid-template-columns: repeat(3, 1fr);">
        <?php 
            include "php/listaJuguetes.php";
            $lista = obtenerListaJuguetes("Muñeca"); 
            foreach($lista as $p):
        ?>
            <div class="product-card">
                <div class="product-image" style="border: 2px solid black; border-radius: 5px;">
                    <span class="discount-tag">50% descuento</span>
                    <img src=" <?php echo $p['imagen']?> " class="product-thumb" alt="">
                    <button class="card-btn">Añadir al carrito</button>
                </div>
                <div class="product-info">
                    <h3 class="product-brand"><?php echo $p['nombre']?></h3>
                    <h3 class="product-short-des"><?php echo $p['marca']?></h3>
                    <span class="price"><?php echo $p['precio']*0.5?>€</span><span class="actual-price"><?php echo $p['precio']?>€</span>
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