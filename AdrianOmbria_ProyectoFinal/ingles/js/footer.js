const createFooter = () => {
    let footer = document.querySelector('footer');

    footer.innerHTML = `
    <div class="footer-content">
    <a href="index.php" class="link"><img src="img/logo-blanco.png" class="logo" alt=""></a>
        <div class="footer-ul-container">
            <ul class="category">
                <li class="category-tittle">toys</li>
                <li><a href="teddy.php" class="footer-link">teddies</a></li>
                <li><a href="wrist.php" class="footer-link">wrists</a></li>
                <li><a href="cars.php" class="footer-link">cars</a></li>
            </ul>
        </div>
    </div>
    <p class="footer-tittle">About us</p>
        <p class="info">We are a company dedicated to the sale of toys available in all countries of the world,
        because for us the smile is the most important thing. We have a splendid catalog of toys,
        from the cutest doll to the fastest and most furious car.</p>
        <p class="info">Contact email - oblectatio@toys.com</p>
        <p class="info">Phone - 233 77 01 69</p>
        <div class="footer-social-container">
            <div class="">
                <a href="#" class="social-link">terms & services</a>
            </div>
            <div class="">
                <a href="https://www.instagram.com/savethechildren_es/?hl=es" class="social-link">instagram</a>
                <a href="https://twitter.com/SaveChildrenEs?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="social-link">twitter</a>
                <a href="https://es-es.facebook.com/savethechildren.es/" class="social-link">facebook</a>
            </div>
        </div>
        <p class="footer-credit">Oblectatio, The best shop toy in the world</p>
    `;
}

createFooter();