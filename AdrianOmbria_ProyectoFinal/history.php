<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblectatio - Perfil</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/table.css">

    <script type="text/javascript">
    </script>
</head>
<body>
    
    <!-- menu -->
    <?php include 'header.php'?>

    <!-- datos usuario -->
    <section class="collection-containerr">
        <div class="containerr">
            <center><h1>Historial de compra</h1>
                <table class="table">
                    <thead style="background: #383838; color: #fff; width: 80px;">
                        <th>Nº Compra</th>
                        <th>Usuario</th>
                        <th>Fecha</th>
                        <th>Precio Total</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                    </thead>
                    <tbody>
                        <?php 
                            include "php/listaHistorial.php";
                            $historial = obtenerHistorial(); 
                            if($historial != null){
                                foreach($historial as $p):
                        ?>
                        <tr>
                            <td><input class="form-control" style="width: 170px;" id="id" readonly="readonly" name="id" type="text" value="<?php echo $p['id']?>"></td>
                            <td><input class="form-control" style="width: 170px;" id="idusuario" readonly="readonly" name="idusuario" type="text" value="<?php echo $p['usuario']?>"></td>
                            <td><input class="form-control" style="width: 240px;" id="fecha" readonly="readonly" name="fecha" type="timestamp" value="<?php echo $p['fecha']?>"></td>
                            <td><input class="form-control" style="width: 170px;" id="preciototal" readonly="readonly" name="preciototal" type="float" value="<?php echo $p['preciototal']?>€"></td>
                            <td><input class="form-control" style="width: 300px;" id="direccion" readonly="readonly" name="direccion" type="text" value="<?php echo $p['direccion']?>"></td>
                            <td><input class="form-control" style="width: 170px;" id="telefono" readonly="readonly" name="telefono" type="text" value="<?php echo $p['telefono']?>"></td>
                            
                        </tr>
                        <?php   endforeach; 
                            }?>
                    </tbody>
                </table>
            </center>
        </div>
    </section>
            
    <!-- footer -->
    <footer></footer>

    <!-- script -->
    <script src="js/nav.js"></script>
    <script src="js/footer.js"></script>
    <script src="js/home.js"></script>
</body>
</html>