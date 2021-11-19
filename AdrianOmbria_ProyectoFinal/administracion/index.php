<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblectatio - Panel Admin</title>
    <link rel="stylesheet" href="css/index.css">

    <script type="text/javascript">
            function confirmarBaja($nick) {
                var mensaje = confirm("¿Desea Eliminar el perfil?");                
                if (mensaje) {
                  //  alert("¡Perfil eliminado!");
                  location.href="php/eliminar.php?nick="+$nick;
                }else {
                    alert("¡No se ha realizado ninguna acción!");
                }
            }
    </script>
</head>
<body>
<?php include 'header.php'?>

    <!-- lista de usuarios -->
    <center><h1>Lista de usuarios</h1></center>
    <div class="container">
        <table class="table">
            <thead>
                <th>Nick</th>
                <th>Contraseña</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Direccion</th>
                <th>Email</th>
                <th>Edad</th>
                <th>Telefono</th>
                <th>DNI</th>
                <th></th>
            </thead>
            <tbody>
                <form action="php/editarUser.php" method="post">
                <?php 
                    include "php/lista.php";
                    $lista = obtenerListaUsuarios(); 
                    foreach($lista as $p):
                ?>
                <tr>
                    <td><input class="form-control" id="nick" readonly="readonly" name="nick" value="<?php echo $p['nick']?>"></td>
                    <td><input class="form-control" id="password" readonly="readonly" name="password" type="text" value="<?php echo $p['password']?>"></td>
                    <td><input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $p['nombre']?>"></td>
                    <td><input class="form-control" id="apellidos" name="apellidos" type="text" value="<?php echo $p['apellidos']?>"></td>
                    <td><input class="form-control" id="direccion" name="direccion" type="text" value="<?php echo $p['direccion']?>"></td>
                    <td><input class="form-control" id="email" name="email" type="email" value="<?php echo $p['email']?>"></td>
                    <td><input class="form-control" id="edad" name="edad" type="number" value="<?php echo $p['edad']?>"></td>
                    <td><input class="form-control" id="telefono" name="telefono" type="text" value="<?php echo $p['telefono']?>"></td>
                    <td><input class="form-control" id="dni" name="dni" type="text" value="<?php echo $p['dni']?>"></td>
                    <td>
                        <button class="btn-edit" type="submit">Editar</button>
                        <button class="btn-delete" type="button" onclick="confirmarBaja('<?php echo $p['nick']?>')">Eliminar</button>
                    </td>
                </tr>
                <?php endforeach; ?>
                </form>
            </tbody>
        </table>
    </div>
</body>
</html>