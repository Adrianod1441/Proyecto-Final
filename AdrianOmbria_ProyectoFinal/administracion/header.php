<?php 
echo    '<div class="nav">
        <a href="index.php"><img src="img/logo.png" alt="" class="brand-logo"></a>
            <div class="nav-items">
                ';
                session_start();
                if (isset($_SESSION["nick"])){
                    echo '<a>
                    <img src="img/login.png" id="user-img" alt="">
                    <div class="login-logout-popup hide">
                        <p class="account-info">Hola, '; if (isset($_SESSION['nick'])){ 
                            echo $_SESSION['nick'];} echo '</p>
                        <a href="logout.php"><button class="btn" id="user-btn">Cerrar sesion</button></a>
                    </div>
                    </a>';
                }else{
                }
                echo '
            </div>
        </div>';
echo    '<ul class="links-container">
            <li class="link-item"><a href="index.php" class="link">Usuarios</a></li>
            <li class="link-item"><a href="toys.php" class="link">Juguetes</a></li>
            <li class="link-item"><a href="messages.php" class="link">Mensajes</a></li>
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
