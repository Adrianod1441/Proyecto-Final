<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblectatio - Profile</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/perfil.css">

    <script type="text/javascript">
            function confirmarBaja() {
                var mensaje = confirm("¿Desea Eliminar el perfil?");
                location.href="php/baja.php";
                
                if (mensaje) {
                    alert("¡Perfil eliminado!");
                }else {
                    alert("¡No se ha realizado ninguna acción!");
                }
            }
    </script>
</head>
<body>
    
    <!-- menu -->
    <?php include 'header.php'?>

    <!-- datos usuario -->
    <section class="collection-containerr">
        <div class="containerr">
        <center><h1>User Profile</h1>
            <form method="post" action="php/editar.php" class="contactForm1" style="position: relative; left: -85%; top: 40px;">
                <h3>Nick</h3> <input id="nick" type="text" name="nick" readonly value=<?php echo $_SESSION['nick']?>>
                <h3>Name</h3> <input id="nombre" type="text" name="nombre" value=<?php echo $_SESSION['nombre']?>>
                <h3>Surnames</h3> <input id="apellidos" type="text" name="apellidos" value=<?php echo $_SESSION['apellidos']?>>
                <h3>Address</h3> <input id="direccion" type="text" name="direccion" value=<?php echo $_SESSION['direccion']?>>
                <h3>Email</h3> <input id="email" type="email" name="email" value=<?php echo $_SESSION['email']?>>
                <h3>Age</h3> <input id="edad" type="number" name="edad" value=<?php echo $_SESSION['edad']?>>
                <h3>Phone</h3> <input id="telefono" type="text" name="telefono" value=<?php echo $_SESSION['telefono']?>>
                <h3>DNI</h3> <input id="dni" type="text" name="dni" value=<?php echo $_SESSION['dni']?>>
                
                <button class="submit-btn" type="submit">Editar usuario</button>
            </form>

            <form method="post" action="php/editarPwd.php" class="contactForm2" style="position: relative; left: 80%; top: -224px;">
                <h3>Old Password</h3> <input id="password" type="password" name="password" placeholder="Write your old password...">
                <h3>New Password</h3> <input id="passwordNueva" type="password" name="passwordNueva" placeholder="Write your new password...">

                <button class="submit-btn" type="submit">Edit Password</button>
            </form>

                <button class="submit-dlt" onclick="confirmarBaja()">Drop Out</button>
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