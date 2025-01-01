<!DOCTYPE html>
<html lang="fr">
    
<head>
    <link rel="stylesheet" href="asset/css/style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Oswald:wght@200..700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Oswald:wght@200..700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <title>Portfolio!</title>

</head>

<body>

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
    </nav>
</header>

 <!-- Presentation-->

<main>

<section class="home">
    <div class="home-container">
    <p class="paragraphe1" id="accueil-menu">
    <span class="salut">Salut,</span>
    Je m’appelle Gaël Pembele, je suis un apprenti développeur, passionné par la technologie et le design, c'est pourquoi j'ai choisi de combiner ces deux univers.</p>
    <ul class="link-contact">
        <li><a href="#contact-menu">Contactez-moi</a></li>
        <h2 class="titre-portfolio">PORTFOLIO&copy;</span></h2>
    </ul>
    </div>
  </section>


 <!--Projet menu-->

<section class="portfolio-section">
<h1 id="projet-menu">[Proje-ts]<span class="number">(01)</span></h1>
<div class="projet-container">

   
    <article class="photos">
    <h2 class="portfolio">Portfolio-Photos</h2>
        <div class="projet-photo"></div>
    </article>

    
    <article class="biographie">
    <h2 class="portfolio">Biographie</h2>
    <div class="projet-galle"></div>
    </article>
    
</div>
</section>

 <!--A propos-->

<section  class="portfolio-section" >
         
         <h1 id="projet-about">[À-propos]<span class="number">(02)</span></h1>  
         <div class="propos-container">
             <article class="grid ">
             <p class="paragraphe">Étudiant en première année de développement web à Digital Campus Paris, je me considère comme un  futur creative developer, passionné par le front-end et le design.</p>
         
             <p class="paragraphe">J’aime allier l’aspect artistique et technique du développement web tout en approfondissant le back-end pour devenir un développeur complet.</p>
         
             <p class="paragraphe">
             En dehors du code, je m’intéresse à la fashion photographie, et la street photographie. Ce portfolio met en avant mes réalisations.
             </p>
             <div class="paragraphe">         
        <h2 class ="competence">Compétences</h2>
        <div class="skills-grid">
            <div class="groupe">
                 <h3 class="web">Web</h3>
                  <p class="skills">
                       html/css
                       javascript
                       php
                       WordPress</p>
             </div>
              <div class="groupe">
                 <h3 class="web">Design</h3>
                    <p class="skills">
                       illustrator 
                       photoshop
                       indesign
                       figma</p>
             </div>
        </div>
             </div>
               <ul class="cv">
                 <li><a href="">.Voir mon CV</a></li>
               </ul>
             </article>
   </div>
</section>
 <!--Contact-->

<?php require "asset/inc/contact.inc.php" ?>

 <!--Menu-->
<section class="portfolio-section">
<h1 class="menu-titre">[Men-u]<span class="number">(04)</span></h1> 
<div class="menu-block">
      <ul class="links-block">
                    <li><a href="#accueil-menu">[Accue-il]<span class="numero">(01)</span></a></li>
                    <li><a href="#projet-menu">[Proje-ts]<span class="numero">(02)</span></a></li>
                    <li><a href="#projet-about">[À-propos]<span class="numero">(03)</span></a></li>
                    <li><a href="#contact-menu">[Conta-ct]<span class="numero">(04)</span></a></li>
               </ul>
</div>
</section>


</main>

 <!--footer-->

<footer>
    <div class="social-lieu-copyright"> 
         <ul class="social">
            <li><a href=""><span class="grand-titre">Social</span></a></li>
            <li><a href="https://www.instagram.com/whvshinngtonn/">instagram</a></li>
            <li><a href="">Linkedin</a></li>
            <li><a href="">Github</a></li>
         </ul>
          <div class="lieu">
                 <p><span class="grand-titre">Lieu</span></p>
                 <p>Paris,</p>
                 <p>France</p>
             </div>
    
        <div class="logo-blanc">
        <svg id="a" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 179.832 126.3">  
        <circle class="b" cx="97.632" cy="115" r="11.3"/> 
        <path class="b" d="M82.132.7h-10.7c-1.1,0-2.1.9-2.1,2.1v11.9C57.231,3.3,38.932-.1,23.132,7.6,2.732,17.5-5.768,42.2,4.132,62.5c7.1,14.6,21.8,23.1,37,23.1,6,0,12.1-1.3,17.9-4.1,3.8-1.9,7.2-4.2,10.2-7.1v10.5c-.2,14.4-11.9,26-26.3,26s-25.1-10.6-26.2-24c-.1-1.3-1.1-2.3-2.4-2.3H4.332c-1.4,0-2.5,1.1-2.4,2.5,1.3,21.5,19.2,38.6,41,38.6,3.7,0,7.3-.5,10.9-1.5,3.4-.9,6.8-2.3,9.8-4.2,3-1.8,5.8-4,8.3-6.4s4.7-5.3,6.4-8.3,3.2-6.4,4.1-9.8c.7-2.6,1.3-5.3,1.3-8l.2-84.8c0-1.1-.9-2.1-2.1-2.1l.3.1ZM66.032,53.1c-2.3,6.6-7,12-13.4,15.1-13.1,6.4-28.8.9-35.2-12.2-6.3-13.1-.9-28.8,12.2-35.2,3.7-1.8,7.6-2.7,11.5-2.7,9.8,0,19.2,5.5,23.7,14.8h0c3.1,6.3,3.5,13.5,1.2,20.1v.1Z"/>
  <path class="b" d="M138.731.1c-14,0-26.4,7.1-33.9,17.8V2.7c0-1.2-.9-2.1-2.1-2.1h-10.6c-1.2,0-2.1.9-2.1,2.1v86.2c0,1.2.9,2.1,2.1,2.1h10.6c1.2,0,2.1-.9,2.1-2.1v-24.5c7.4,10.8,19.8,17.8,33.9,17.8,22.7,0,41.1-18.4,41.1-41.1S161.432,0,138.731,0v.1ZM138.731,67.6c-14.5,0-26.3-11.8-26.3-26.3s11.8-26.3,26.3-26.3,26.3,11.8,26.3,26.3-11.8,26.3-26.3,26.3Z"/>
        </svg>   
    </div>

          <div class="droit">
          <p>Copyright © 2025</p>
            <p>Tous droits réservés.</p>
        </div>
    </div>
</footer>


</body>
</html>

