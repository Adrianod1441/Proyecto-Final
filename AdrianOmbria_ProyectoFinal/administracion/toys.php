<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblectatio - Panel Admin</title>
    <link rel="stylesheet" href="css/index.css">

    <script type="text/javascript">
            function confirmarDelete($id) {
                var mensaje = confirm("¿Desea Eliminar el juguete?");                
                if (mensaje) {
                  //  alert("Juguete eliminado!");
                  location.href="php/eliminarJuguete.php?id="+$id;
                }else {
                    alert("¡No se ha realizado ninguna acción!");
                }
            }
    </script>
</head>
<body>
<?php include 'header.php'?>

    <!-- lista de juguetes -->
    <center><h1>Lista de juguetes</h1></center>
    <div class="container">
    <a href="insertToy.php"><button class="btn-add" type="submit">Añadir juguete</button></a>
        <table class="table2">
            <thead style="background-color: #3f51b5; color: #ffffff;">
                <th>ID</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Tipo</th>
                <th>Codigo</th>
                <th>Lugar de creacion</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th></th>
            </thead>
            <tbody>
                <form action="php/editarJuguete.php" method="post">
                <?php 
                    include "php/listaJuguetes.php";
                    $listaJuguete = obtenerListaJuguetes(); 
                    foreach($listaJuguete as $p):
                ?>
                <tr>
                    <td><input class="form-control" id="id" readonly="readonly" name="id" value="<?php echo $p['id']?>"></td>
                    <td><input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $p['nombre']?>"></td>
                    <td><input class="form-control" id="marca" name="marca" type="text" value="<?php echo $p['marca']?>"></td>
                    <td><input class="form-control" id="tipo" name="tipo" type="text" value="<?php echo $p['tipo']?>"></td>
                    <td><input class="form-control" id="codigo" name="codigo" type="text" value="<?php echo $p['codigo']?>"></td>
                    <td><input class="form-control" id="lugarcreacion" name="lugarcreacion" type="text" value="<?php echo $p['lugarcreacion']?>"></td>
                    <td><input class="form-control" id="precio" name="precio" type="float" value="<?php echo $p['precio']?>"></td>
                    <td><input class="form-control" id="descripcion" name="descripcion" type="text" value="<?php echo $p['descripcion']?>"></td>
                    <td>
                        <button class="btn-edit" type="submit">Editar</button>
                        <button class="btn-delete" type="button" onclick="confirmarDelete('<?php echo $p['id']?>')">Eliminar</button>
                    </td>
                </tr>
                <?php endforeach; ?>
                </form>
            </tbody>
        </table>
    </div>
</body>
</html>