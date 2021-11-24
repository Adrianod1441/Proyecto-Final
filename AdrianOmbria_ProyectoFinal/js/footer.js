const createFooter = () => {
    let footer = document.querySelector('footer');

    footer.innerHTML = `
    <div class="footer-content">
    <a href="index.php" class="link"><img src="img/logo-blanco.png" class="logo" alt=""></a>
        <div class="footer-ul-container">
            <ul class="category">
                <li class="category-tittle">juguetes</li>
                <li><a href="teddy.php?paginaActual=1" class="footer-link">peluches</a></li>
                <li><a href="wrist.php?paginaActual=1" class="footer-link">muñecas</a></li>
                <li><a href="cars.php?paginaActual=1" class="footer-link">coches</a></li>
            </ul>
        </div>
    </div>
    <p class="footer-tittle">Sobre nosotros</p>
        <p class="info">Somos una empresa dedicada a la venta de juguetes disponible en todos los paises del mundo,
        porque para nosotros la sonrisa es lo más importante. Tenemos un espléndido catálogo de juguetes,
        desde la muñeca mas linda hasta el coche más rápido y furioso.</p>
        <p class="info">Email de contacto - oblectatio@toys.com</p>
        <p class="info">Teléfono - 233 77 01 69</p>
        <div class="footer-social-container">
            <div class="">
                <a href="aboutus.php" class="social-link">terminos & servicios</a>
            </div>
            <div class="">
                <a href="https://www.instagram.com/savethechildren_es/?hl=es" class="social-link">instagram</a>
                <a href="https://twitter.com/SaveChildrenEs?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="social-link">twitter</a>
                <a href="https://es-es.facebook.com/savethechildren.es/" class="social-link">facebook</a>
            </div>
        </div>
        <p class="footer-credit">Oblectatio, La mejor tienda de juguetes</p>
    `;
}

createFooter();