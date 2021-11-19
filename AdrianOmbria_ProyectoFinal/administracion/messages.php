<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblectatio - Panel Admin</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<?php include 'header.php'?>

    <!-- mensajes para un usuario -->
    <center>
        <div class="container">
            <form action="php/mensaje.php" method="post">
                <h3>¿A quien quieres enviarle un mensaje?</h3>
                <input class="form-control" id="nick" name="nick"><br>
                <h3>Escriba aqui el contenido del mensaje</h3>
                <input class="form-control" id="texto" name="texto" type="text" style="width: 80%;">
                <button class="btn-edit" type="submit" style="margin-top: 10px; width: 100px;">Enviar</button>
            </form>
        </div>
    </center>
</body>
</html>