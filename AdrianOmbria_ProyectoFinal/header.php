<?php 
echo    '<div class="nav">
        <a href="index.php"><img src="img/logo.png" alt="" class="brand-logo"></a>
            <div class="nav-items">
                <div class="search">
                </div>';
                session_start();
                if (isset($_SESSION["nick"])){
                    echo '<a>
                    <img src="img/login.png" id="user-img" alt="">
                    <div class="login-logout-popup hide">
                        <p class="account-info">Hola, '; if (isset($_SESSION['nick'])){ 
                            echo $_SESSION['nick'];} echo '</p>
                        <a href="perfil.php"><button class="btn" id="user-btn">Perfil</button></a>
                        <a href="message.php"><button class="btn" id="user-btn">Mensajes</button></a>
                        <a href="history.php"><button class="btn" id="user-btn">Historial compra</button></a>
                        <a href="logout.php"><button class="btn" id="user-btn">Cerrar sesion</button></a>
                    </div>
                    </a>';
                }else{
                    echo '<a>
                    <img src="img/login.png" id="user-img" alt="">
                    <div class="login-logout-popup hide">
                        <a href="singin.php"><button class="btn" id="login-btn">Log in</button></a>
                    </div>
                    </a>';
                }
                echo '<div>';
                    if(!isset($_SESSION["nick"])){
                    }else{
                        
                    echo '<a href="shopCart.php" style="color: black;">
                        <img src="img/carrito.png" id="carr-img" alt="">';
                            if(isset($_SESSION["nick"])){
                                if(count($_SESSION['carrito']) != 0){
                                    echo count($_SESSION['carrito']);
                                }
                            }
                    }
                        
                echo '</div>
                </a>
            </div>
        </div>';
echo    '<ul class="links-container">
            <li class="link-item"><a href="index.php" class="link">Inicio</a></li>
            <li class="link-item"><a href="search.php" class="link">Juguetes</a></li>
            <li class="link-item"><a href="wrist.php" class="link">Muñecas</a></li>
            <li class="link-item"><a href="teddy.php" class="link">Peluches</a></li>
            <li class="link-item"><a href="cars.php" class="link">Coches</a></li>
            <li class="link-item"><a href="aboutus.php" class="link">Sobre nosotros</a></li>
        </ul>'; 
        
?>
<!-- script para desplegar el icono de login -->
<script>
    const createNav = () => {
    }
    createNav();

    const userImageButton = document.querySelector('#user-img');
    const userPop = document.querySelector('.login-logout-popup');
    const popuptext = document.querySelector('.account-info');
    const actionBtn = document.querySelector('#user-btn');

    userImageButton.addEventListener('click', () =>{
        userPop.classList.toggle('hide');
    })

</script>
