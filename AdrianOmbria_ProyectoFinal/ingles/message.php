<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblectatio - Messages</title>
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/perfil.css">
</head>
<body>
    
    <!-- menu -->
    <?php include 'header.php'?>

    <!-- datos usuario -->
    <section class="collection-containerr">
        <div class="containerr">
        <center>
            <h1 style="position: relative;">Received messages</h1>
                    
            <table class="tablemsg" id="dataTable" style="position: relative; margin-top: 59px; margin-bottom: 50px;">
                <tr>
                    <th>Author</th>
                    <th>Messages</th>
                    <th></th>
                </tr>
                <form action="" method="post" class="contactForm3">
                    <?php 
                        include "../php/listaMensaje.php";
                        $lista = obtenerListaMensajes(); 
                        if($lista != null){
                            foreach($lista as $p):
                    ?>
                    <tr>
                        <td><input id="nick" readonly="readonly" type="text" name="nick" value="<?php echo $p['nick']?>" style="width: 100px;"></td>
                        <td><input id="texto" name="texto" readonly="readonly" type="text" value="<?php echo $p['texto']?>" style="width: 500px;"></td>
                    </tr>
                    <?php endforeach; 
                    }?>
                </form>
            </table>
        </center>
        </div>
    </section>
            
    <!-- footer -->
    <footer></footer>

    <!-- script -->
    <script src="js/footer.js"></script>
    <script src="js/home.js"></script>
</body>
</html>