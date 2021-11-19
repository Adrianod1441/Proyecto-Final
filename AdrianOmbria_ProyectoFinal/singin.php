<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblectatio - Login</title>
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
        <div class="">
            <form id="contactForm" name="sentMessage" method="POST" action="php/login.php" style="margin-top: -50px;">
                <input class="" id="nick" name="nick" type="text" placeholder="Tu nick *" required="required">
                <input class="" id="password" name="password" type="password" placeholder="Tu contraseña *" required="required">
                <button class="submit-btn" type="submit">Log in</button>
            </form>
        </div>
        <a href="singup.php" class="link">¿no tienes una cuenta? registrate aqui</a>
    </div>

    <script src="js/form.js"></script>

</body>
</html>