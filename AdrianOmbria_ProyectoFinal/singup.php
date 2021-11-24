<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblectatio - Registro</title>
    <link rel="stylesheet" href="css/singup.css">
</head>
<body>

    <div class="alert-box">
        <img src="img/error.png" alt="" class="alert-img">
        <p class="error-msg">Mensaje de error</p>
    </div>

    <div class="container">
        <img src="img/logo.png" alt="" class="logo">
            <form id="contactForm" name="contactForm" method="POST" action="php/registro.php" style="margin-top: -50px;">
                <input id="nick" type="text" name="nick" placeholder="Tu nick *" required="required">
                <input id="password" type="password" name="password" placeholder="Tu contraseña *" required="required">
                <input id="nombre" type="text" name="nombre" placeholder="Tu nombre *" required="required">
                <input id="apellidos" type="text" name="apellidos" placeholder="Tus apellidos *" required="required">
                <input id="direccion" type="text" name="direccion" placeholder="Tu direccion *" required="required">
                <input id="email" type="email" name="email" placeholder="Tu email *" required="required">
                <input id="edad" type="number" name="edad" placeholder="Tu edad *" required="required">
                <input id="telefono" type="text" name="telefono" placeholder="Tu telefono *" required="required">
                <input id="dni" type="text" name="dni" placeholder="Tu dni *" required="required">
                <button class="submit-btn" type="button">crear cuenta</button>
            </form>
        <a href="singin.php" class="link" style="margin-bottom: 20px;">¿ya tienes una cuenta? logueate aqui</a>
    </div>

    <script src="js/form.js"></script>

</body>
</html>