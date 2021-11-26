<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblectatio - Singup</title>
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/singup.css">
</head>
<body>

    <div class="alert-box">
        <img src="../img/error.png" alt="" class="alert-img">
        <p class="error-msg">Error message</p>
    </div>

    <div class="container">
        <img src="../img/logo.png" alt="" class="logo">
            <form id="contactForm" name="contactForm" method="POST" action="php/registro.php" style="margin-top: -50px;">
                <input id="nick" type="text" name="nick" placeholder="Your nick *" required="required">
                <input id="password" type="password" name="password" placeholder="Your password *" required="required">
                <input id="nombre" type="text" name="nombre" placeholder="Your name *" required="required">
                <input id="apellidos" type="text" name="apellidos" placeholder="Your surname *" required="required">
                <input id="direccion" type="text" name="direccion" placeholder="Your address *" required="required">
                <input id="email" type="email" name="email" placeholder="Your email *" required="required">
                <input id="edad" type="number" name="edad" placeholder="Your age *" required="required">
                <input id="telefono" type="text" name="telefono" placeholder="Your phone *" required="required">
                <input id="dni" type="text" name="dni" placeholder="Your dni *" required="required">
                <button class="submit-btn" type="button">create account</button>
            </form>
        <a href="singin.php" class="link" style="margin-bottom: 20px;">¿do you already have an account? log in here</a>
    </div>

    <script src="js/form.js"></script>

</body>
</html>