const createNav = () => {
    let nav = document.querySelector('.navbar');

    nav.innerHTML = `
        
        <div class="nav">
            <img src="img/logo.png" alt="" class="brand-logo">
            <div class="nav-items">
                <div class="search">
                    <input type="text" class="search-box" placeholder="Buscar producto...">
                    <button class="search-btn">Buscar</button>
                </div>
                <a href="../singup.php"><img src="img/login.png" alt=""></a>
                <a href="#"><img src="img/carrito.png" alt=""></a>
            </div>
        </div>
        <ul class="links-container">
            <li class="link-item"><a href="#" class="link">Inicio</a></li>
            <li class="link-item"><a href="#" class="link">Productos</a></li>
            <li class="link-item"><a href="#" class="link">Nose</a></li>
            <li class="link-item"><a href="#" class="link">Nose</a></li>
            <li class="link-item"><a href="#" class="link">Nose</a></li>
        </ul>
    
    `;
}

createNav();