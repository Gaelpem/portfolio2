<!DOCTYPE html>
<html lang="fr">
    
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="asset/img/logo.svg" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="asset/css/style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Oswald:wght@200..700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Oswald:wght@200..700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <title>Gaël Pembele</title>

</head>

<body>
 <!-- NAV-->
<?php require_once 'asset/inc/navbar.inc.php' ?>
 <!-- Presentation-->

<main>

<section class="home">
    <div class="home-container">
    <p class="paragraphe1" id="accueil-menu">
    Je m’appelle Gaël Pembele, je suis un apprenti développeur, passionné par la technologie et le design, c'est pourquoi j'ai choisi de combiner ces deux univers.</p>
    <ul class="link-contact">
        <li><a href="#contact-menu">Contactez-moi</a></li>
        <div class="titre-portfolio1">
    <h2 class="titre-portfolio">PORTFOLIO&copy;</span></h2>
    </div>
    </ul>
    </div> 
   
  </section>


 <!--Projet menu-->

<section class="portfolio-section">
<h1 id="projet-menu">[Proje-ts]<span class="number">(01)</span></h1>
<div class="projet-container">

   
    <article class="photos">
    <h2 class="portfolio"><a href="projet-photo.php">Portfolio Photos</a></h2>
        <div class="projet.photo"></div>
    </article>

    
    <article class="biographie">
    <h2 class="portfolio"><a href="">Biographie</a></h2>
    <div class="projet.galle"></div>
    </article>
    
</div>
</section>

 <!--A propos-->

 <section class="portfolio-section">
    <h1 id="projet-about">[À-propos]<span class="number">(02)</span></h1>
    <div class="propos-container">
        <article class="grid">
            <p class="paragraphe">Étudiant en première année de développement web à Digital Campus Paris, je me considère comme un futur creative developer, passionné par le front-end et le design.</p>
            <p class="paragraphe">J’aime allier l’aspect artistique et technique du développement web tout en approfondissant le back-end pour devenir un développeur complet.</p>
            <p class="paragraphe">En dehors du code, je m’intéresse à la fashion photographie, et la street photographie. Ce portfolio met en avant mes réalisations.</p>
            <div class="paragraphe">
                <h2 class="competence">Compétences</h2>
                <div class="skills-grid">
                    <div class="groupe">
                        <h3 class="web">Web</h3>
                        <p class="skills">html/css<br>javascript<br>php<br>WordPress</p>
                    </div>
                    <div class="groupe">
                        <h3 class="web">Design</h3>
                        <p class="skills">illustrator<br>photoshop<br>indesign<br>figma</p>
                    </div>
                </div>
            </div>
        </article>
    </div>
     <ul class="cv">
                <li><a href="asset/cv/Gael_Pembele_CV.pdf" target="_blank">.Voir mon CV</a></li>
      </ul>
</section>

 <!--Contact-->

<?php require "asset/inc/contact.inc.php" ?>

 <!--Menu-->
<section class="portfolio-section menu">
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
<?php  require_once 'asset/inc/footer.inc.php'?>
 <!--footer-->


</body>
</html>

