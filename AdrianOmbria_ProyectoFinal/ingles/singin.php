<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblectatio - Login</title>
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/singup.css">
</head>
<body>
    
    <img src="img/loader.gif" alt="" class="loader">


    <div class="container">
        <img src="../img/logo.png" alt="" class="logo">
        <div class="">
            <form id="contactForm" name="sentMessage" method="POST" action="php/login.php" style="margin-top: -50px;">
                <input class="" id="nick" name="nick" type="text" placeholder="Your nick *" required="required">
                <input class="" id="password" name="password" type="password" placeholder="Your password *" required="required">
                <button class="submit-btn" type="submit">Log in</button>
            </form>
        </div>
        <a href="singup.php" class="link">¿don't you have an account? sing up here</a>
    </div>

</body>
</html>