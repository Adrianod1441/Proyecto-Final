<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblectatio - Profile</title>
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/perfil.css">

    <script type="text/javascript">
            function confirmarBaja() {
                var mensaje = confirm("¿Desea Eliminar el perfil?");
                if (mensaje) {
                    //  alert("¡Perfil eliminado!");
                    location.href="../php/baja.php"
                }else {
                    alert("¡No se ha realizado ninguna acción!");
                }
            }
    </script>
</head>
<body>
    
    <!-- menu -->
    <?php include 'header.php'?>

    <div class="alert-box">
        <img src="../img/error.png" alt="" class="alert-img">
        <p class="error-msg">Error Message</p>
    </div>

    <!-- datos usuario -->
    <section class="collection-containerr">
        <div class="containerr">
        <center><h1>User Profile</h1>
            <form method="post" action="../php/editar.php" id="contactForm" name="contactForm" class="contactForm1" style="position: relative; left: -85%; top: 40px;">
                <h3>Nick</h3> <input id="nick" type="text" name="nick" readonly value="<?php echo $_SESSION['nick']?>">
                <h3>Name</h3> <input id="nombre" type="text" name="nombre" value="<?php echo $_SESSION['nombre']?>">
                <h3>Surnames</h3> <input id="apellidos" type="text" name="apellidos" value="<?php echo $_SESSION['apellidos']?>">
                <h3>Address</h3> <input id="direccion" type="text" name="direccion" value="<?php echo $_SESSION['direccion']?>">
                <h3>Email</h3> <input id="email" type="email" name="email" value="<?php echo $_SESSION['email']?>">
                <h3>Age</h3> <input id="edad" type="number" name="edad" value="<?php echo $_SESSION['edad']?>">
                <h3>Phone</h3> <input id="telefono" type="text" name="telefono" value="<?php echo $_SESSION['telefono']?>">
                <h3>DNI</h3> <input id="dni" type="text" name="dni" value="<?php echo $_SESSION['dni']?>">
                
                <button class="submit-btn" type="button">Editar usuario</button>
            </form>

            <form method="post" action="../php/editarPwd.php" class="contactForm2" style="position: relative; left: 80%; top: -325px;">
                <h3>Old Password</h3> <input id="password" type="password" name="password" placeholder="Write your old password...">
                <h3>New Password</h3> <input id="passwordNueva" type="password" name="passwordNueva" placeholder="Write your new password...">
                <h3>Repeat New Password</h3> <input id="passwordNuevaRep" type="password" name="passwordNuevaRep" placeholder="Repeat your new password...">

                <button class="submit-btn2" type="button">Edit Password</button>
            </form>

                <button class="submit-dlt" onclick="confirmarBaja()">Drop Out</button>
        </center>
        </div>
    </section>
            
    <!-- footer -->
    <footer></footer>

    <!-- script -->
    <script src="js/footer.js"></script>
    <script src="js/home.js"></script>
    <script src="js/pwd.js"></script>
    <script src="js/formEdit.js"></script>
</body>
</html>