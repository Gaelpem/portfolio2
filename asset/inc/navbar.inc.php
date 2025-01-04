<header>
    <!-- Navigation principale -->
    <nav class="navbar">
        <!-- Lien vers Accueil -->
        <ul class="nav-links link-home">
            <li><a href="#accueil-menu" aria-label="Retour à l'accueil">Accueil</a></li>
        </ul>
        
        <!-- Logo -->
        <div class="logo">
            <img src="asset/img/logo.svg" alt="Logo de mon site">
        </div>

        <!-- Liens de navigation -->
        <ul class="nav-links">
            <li><a href="#projet-menu" aria-label="Voir mes projets">Projets</a></li>
            <li><a href="#projet-about" aria-label="À propos de moi">/ À propos</a></li>
            <li><a href="#contact-menu" aria-label="Contactez-moi">/ Contact</a></li>
        </ul>
        <div class="burger-menu-button">
        <p class="menu-bar">Menu</p>
    </div>
    </nav>

    <div class="burger-menu open">
    <ul class="nav-links link-home">
            <li><a href="#accueil-menu" aria-label="Retour à l'accueil">Accueil</a></li>
            <li><a href="#projet-menu" aria-label="Voir mes projets">Projets</a></li>
            <li><a href="#projet-about" aria-label="À propos de moi">À propos</a></li>
            <li><a href="#contact-menu" aria-label="Contactez-moi"> Contact</a></li>
        </ul>
    
    <div class="indicateur">
        <p>Développé par Gaël Pembele</p>
    </div>
        
    </div>
</header>

<script>
    const burgerMenuButton = document.querySelector('.burger-menu-button')
    const burgerMenuP = document.querySelector('.burger-menu-button p')
    const burgerMenu = document.querySelector('.burger-menu')
    

    burgerMenuButton.onclick = function () {
        burgerMenu.classList.toggle('open'); // Ajoute ou retire la classe "open"
    };
</script>