<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblectatio - Perfil</title>
    <link rel="stylesheet" href="css/singup.css">
</head>
<body>
    
    <img src="img/loader.gif" alt="" class="loader">

    <div class="alert-box">
        <img src="img/error.png" alt="" class="alert-img">
        <p class="error-msg">Mensaje de error</p>
    </div>

    <div class="container">
        <img src="img/logo.png" alt="" class="logo">
            <form id="contactForm" name="sentMessage" method="POST" action="php/insertarJuguete.php">
                <input id="nombre" type="text" name="nombre" placeholder="El nombre *" required="required">
                <input id="marca" type="text" name="marca" placeholder="La marca *" required="required">
                <select id="tipo" name="tipo" required="required">
                    <option value="Muñeca">Muñeca</option>
                    <option value="Peluche">Peluche</option>
                    <option value="Coche">Coche</option>
                </select>
                <input id="codigo" type="text" name="codigo" placeholder="El codigo *" required="required">
                <input id="lugarcreacion" type="text" name="lugarcreacion" placeholder="El lugar de creacion *" required="required">
                <input id="precio" type="number" name="precio" placeholder="El precio *" required="required">
                <input id="descripcion" type="text" name="descripcion" placeholder="La descripcion *" required="required">
                <input id="base64" type="hidden" name="base64">
                <h3>Imagen</h3>
                <input onchange="previewFile()" id="imagen" type="file" name="imagen" required="required">
                <br>
                <img id="preview" src="" height="200">
                <button class="submit-btn" type="submit">Crear juguete</button>
            </form>
    </div>

    <script src="js/form.js"></script>
    <script src="js/temp.js"></script>

</body>
</html>