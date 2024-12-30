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
   <h2 class="titre-portfolio">PORTFOLIO<span class="copyright">&copy;</span></h2>
    <p class="paragraphe1">
    <span class="salut">Salut__!</span>
    Je m’appelle Gaël Pembele, je suis un apprenti développeur, passionné par la technologie et le design, c'est pourquoi j'ai choisi de combiner ces deux univers ensemble.</p>
    <ul class="link-contact">
        <li><a href="">Contactez-moi</a></li>
    </ul>
    </div>
  </section>


 <!--Projet menu-->

<section class="portfolio-section">
<div class="projet-container">
    <h1 id="projet-menu">[Proje-ts]<span class="number">(01)</span></h1>
    <div class="trait-horizontal4"></div>
    <article class="photos">
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
        <h2>Compétences</h2>
        <div class="skills-grid">
            <p class="skills"><span class="web">Web</span>
              html/css
              javascript
              php
              WordPress</p>
              <p class="skills"><span class="web">Design</span>
             illustrator 
             photoshop
             indesign
             figma</p>
        </div>
             </div>
               <ul class="cv">
                 <li><a href="">.Voir mon CV</a></li>
               </ul>
             </article>
   </div>
</section>
 <!--Contact-->


<section  class="portfolio-section">
    <div class="contact-container">  
     <h1 id="contact-menu">[Conta-ct]<span class="number">(03)</span></h1> 
      <div class="contact-mini">
    <p>Pour toutes questions, avis, opportunités de stage ou d’alternance, n’hésitez pas à me contacter. Je suis ouverte aux échanges et prête à discuter avec vous.</p>
      <form action="" method="">
         <label for="nom">Nom</label>
         <input type="text" name="user_nom" id="nom" placeholder="Paul">
         <label for="email">Email</label>
         <input type="text" name="user_email" id="email" placeholder="exemple@gmail.com">
         <button type="submit">Envoyez</button>
      </form>
      <ul class="reseau">
        <li><a href="">pembelegael@gmail.com</a></li>
        <li><a href="">linkedin</a></li>
        <li><a href="">github</a></li>
        <li><a href="">instagram</a></li>
     </ul>
    </div>
</section>




<section class="portfolio-section ">
<h1 class="menu-titre">[Men-u]<span class="number">(04)</span></h1> 
<div class="menu-block">
      <ul class="links-block">
                    <li><a href="#projet-menu">[Accue-il]<span class="numero">(01)</span></a></li>
                    <li><a href="#projet-menu">[Proje-ts]<span class="numero">(02)</span></a></li>
                    <li><a href="#projet-about">[À-propos]<span class="numero">(03)</span></a></li>
                    <li><a href="#contact-menu">[Conta-ct]<span class="numero">(04)</span></a></li>
               </ul>
</div>
</section>
</main>



<footer>

<section class="footer-container">
    <div class="social-lieu"> 
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

     </div>


    <div class="logo-blanc">

    </div>

      <div class="droit">
      <p>Copyright © 2025</p>
        <p>Tous droits réservés.</p>
    </div>
    </section>   
</footer>


</body>
</html>

