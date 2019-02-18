<?php
if(empty($_GET['lang'])){
    $_SESSION['lang'] = "fr";
}else{
    switch($_GET['lang']){
        case "fr":
        $_SESSION['lang'] = "fr";
        break;
        case "en":
        $_SESSION['lang'] = "en";
        break;
        default :
        $_SESSION['lang'] = "fr";
        break;
    }
}

switch($_SESSION['lang']){
        case "fr":
        $fichier_langage = "lang/francais.php";
        break;
        case "en":
        $fichier_langage = "lang/anglais.php";
        break;
}
include($fichier_langage);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="I684KFQte1aGhXs05cYqzJmTvwe3P7m7Be-SHzrrJqc" />
  <title>Roudier Maxime - Portfolio</title>
  <link rel="shortcut icon" href="./assets/img/favicon.png" type="image/png">
  <!-- @@@ CSS @@@ -->
  <link href="assets/css/animate.css" rel="stylesheet">
  <link href="assets/css/app.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
  <!-- @@@ Fonts @@@ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Andika" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

</head>
<body>

<!--                     Menu burger                           -->

<section id="loader">
  <h3 class="text"><?php echo _LOADER ?></h3>
  <span class="loader loader-circles"></span>
</section>

<div class="menu">
  <div class="menu_burger">
      <span></span>
      <span></span>
      <span></span>
  </div>
  <div class="menu_lien">
    <img src="./assets/img/logoNomJaune.png" alt="logo">
    <ul>
      <li><a href="#competence" class="zoomInUp animated"><?php echo _MENUCOMPETENCES ?></a></li>
      <li><a href="#travaux" class="zoomInUp animated"><?php echo _MENUTRAVAUX ?></a></li>
      <li><a href="#contact" class="zoomInUp animated"><?php echo _MENUCONTACT ?></a></li>
    </ul>
  </div>
</div>

<!--                        Partie Présentation                              -->

<div class="bloc bloc_front" id="front">
  <div class="bloc_front_1">
    <p><?php echo _METIERS ?></p>
    <p><?php echo _DEVENIR ?></p>
  </div>
  <div class="bloc_front_2">
    <img src="./assets/img/logoNom.png" alt="logo">
  </div>
  <div class="bloc_front_3">
    <div>
      <a href="#" id="dis"><?php echo _DYSLEXIQUE ?></a>
    </div>
    <div>
      <p>Texte :</p>
      <a href="#" id="plus"> + </a>
      <a href="#" id="moins"> - </a>
    </div>
    <div>
      <p>Langue : </p>
      <a href="?lang=en">EN</a>
      <a href="?lang=fr">FR</a>
    </div>
  </div>

  <div class="bloc_aPropos">
    <h3><?php echo _BIENVENUE ?></h3>
    <img src="assets/img/studio.png" alt="profil" >
    <div class="aPropos_qualite">
      <h3><?php echo _DIPLOME ?></h3>
      <p><?php echo _DIPLOMETEXTE ?></p>
    </div>
    <div class="aPropos_qualite">
      <h3><?php echo _PASSIONNE ?></h3>
      <p><?php echo _PASSIONNETEXTE ?></p>
    </div>
    <div class="aPropos_qualite">
      <h3><?php echo _CREATIV ?></h3>
      <p><?php echo _CREATIVTEXTE ?></p>
    </div>
   <a  href="./assets/RoudierMaximeCV.pdf" target="_blank" class="aPropos_btnCV"><?php echo _CV ?></a>
  </div>
</div>


<!--                       Partie présentant mes compétences                      -->

<div class="bloc bloc_competence" id="competence">
<div class="competence_texte">
  <h3><?php echo _SKILLS ?></h3>
  <p><?php echo _SKILLSTEXT1 ?><span><?php echo _SKILLSSPAN1 ?></span><?php echo _SKILLSTEXT2 ?><span><?php echo _SKILLSSPAN2 ?></span><?php echo _SKILLSTEXT3 ?><span><?php echo _SKILLSSPAN3 ?></span><?php echo _SKILLSTEXT4 ?></p>
  <p><?php echo _CURSUS ?></p>
</div>
<div class="competence_list">
  <div class="competence-front compet">
    <div class="front_titre">
      <h3><?php echo _TITRECOMPETFRONT ?></h3>
    </div>
    <div class="front_texte">
      <i class="devicon-html5-plain"></i><p><?php echo _COMPTEHTML ?></p>
      <i class="devicon-css3-plain"></i><p><?php echo _COMPETCSS ?></p>
      <i class="devicon-bootstrap-plain"></i><p><?php echo _COMPETBOOTSTRAT ?></p>
      <i class="devicon-javascript-plain"></i><p><?php echo _COMPETJS ?></p>
      <i class="devicon-jquery-plain"></i><p><?php echo _COMPETJQUERY ?></p>
      <i class="devicon-gulp-plain"></i><p><?php echo _COMPETGULP ?></p>
    </div>
  </div>
  <div class="competence-back compet">
    <div class="back_titre">
      <h3><?php echo _TITRECOMPETBACK ?></h3>
    </div>
    <div class="back_texte">
      <i class="devicon-php-plain"></i><p><?php echo _COMPETPHP ?></p>
      <i class="devicon-laravel-plain"></i><p><?php echo _COMPETLARAVEL ?></p>
      <i class="devicon-mysql-plain"></i><p><?php echo _COMPETMYSQL ?></p>
      <i class="devicon-linux-plain"></i><p><?php echo _COMPETLINUX ?></p>
      <i class="devicon-wordpress-plain"></i><p><?php echo _COMPETWORDPRESS ?></p>
    </div>
  </div>
  <div class="competence-design compet">
    <div class="design_titre">
      <h3><?php echo _TITRECOMPETGRAPHISME ?></h3>
    </div>
    <div class="design_texte">
      <i class="devicon-photoshop-plain"></i><p><?php echo _COMPETPHOTOSHOP ?></p>
      <i class="devicon-illustrator-plain"></i><p><?php echo _COMPETILLUSTRATOR ?></p>
    </div>
  </div>
  <div class="competence-projet compet">
    <div class="projet_titre">
      <h3><?php echo _TITRECOMPETPROJET ?></h3>
    </div>
    <div class="projet_texte">
      <i class="fas fa-code-branch"></i><p><?php echo _COMPETAGILE ?></p>
      <i class="devicon-github-plain"></i><p><?php echo _COMPETGITHUB ?></p>
      <i class="fas fa-list-ol"></i><p><?php echo _COMPETSEO ?></p>
    </div>
  </div>
</div>
</div>

<!--                                 Partie présentant mes travaux                        -->

<div class="bloc bloc_travaux"  id="travaux">
  <div class="travaux_left travaux_container" >
    <h3><?php echo _TRAVAUXGROUPE ?></h3>
    <img src="./assets/img/suit-man.jpg" alt="projet_bourse" class="left_img">
    <button class="travaux_btn left_btn" id="left_btn"><?php echo _PLUS ?></button>
    <button class="travaux_btn-retour left_btn-retour" id="left_btn-retour"><?php echo _RETOUR ?></button>
    <img src="./assets/img/traidHeaven.png" alt="traid-heaven" class="imgDescrip">
    <p><?php echo _TRAVAUXGROUPETEXTE ?></p>
  </div>
  <div class="travaux_middle travaux_container">
    <h3><?php echo _TRAVAUXRESPONSIVE ?></h3>
    <img src="./assets/img/responsive.jpg" alt="Responsive" class="middle_img">
    <button class="travaux_btn middle_btn" id="middle_btn"><?php echo _PLUS ?></button>
    <button class="travaux_btn-retour middle_btn-retour" id="middle_btn-retour"><?php echo _RETOUR ?></button>
    <img src="./assets/img/tabletPhone.png" alt="responsive" class="imgDescrip imgMobilefirst">
    <p><?php echo _TRAVAUXRESPONSIVETEXTE ?></p>
  </div>
  <div class="travaux_right travaux_container">
    <h3><?php echo _TRAVAUXPERSO ?></h3>
    <img src="./assets/img/couture-site.jpg" alt="frisette_couture" class="right_img">
    <button class="travaux_btn right_btn" id="right_btn"><?php echo _PLUS ?></button>
    <button class="travaux_btn-retour right_btn-retour" id="right_btn-retour"><?php echo _RETOUR ?></button>
    <img src="./assets/img/frisetteDescription.png" alt="frisette_couture" class="imgDescrip">
    <p><?php echo _TRAVAUXPERSOTEXTE ?></p>
  </div>
</div>

<!--             Formulaire de contact ( à rendre fonctionnel lors du changement d'hébergeur)                 -->

<div class="bloc bloc_contact" id="contact">
  <h2><?php echo _RECHERCHEALTERNANCE ?></h2>
  <h2><?php echo _CONTACT ?></h2>
  <form action="contact.php" method="POST">
    <div class="contact_form">
        <div class="champNom">
            <label for="name"><?php echo _CONTACTNOM ?></label>
            <input type="text" name="name" class="nom_input" placeholder="Pierre Dupont" id="name">
        </div>
        <div class="champEmail">
            <label for="mail"><?php echo _CONTACTMAIL ?></label>
            <input type="text" name="mail" class="email_input" placeholder="pierre.dupont@wanadoo.fr" id="mail">
        </div>
        <div class="champMessage">
            <label for="message"><?php echo _CONTACTMESSAGE ?></label>
            <textarea name="message" class="message_input" placeholder="<?php echo _CONTACTMESSAGEPLACEHOLDER ?>" id="message"></textarea>
        </div>
        <p><?php echo _CONTACTFORMTEMPORAIRE ?></p>
        <p id="copie_adresse">maximeroudierpro@gmail.com</p>
        <a class="linkCopier"><?php echo _COPIER ?></a>
    </div>
  </form>
</div>

<!--               Footer               -->

<div class="bloc_footer">
  <p><h1><?php echo _FOOTERNOM ?></h1><?php echo _FOOTERDROIT ?><a href="/mentionslegales.html"><?php echo _FOOTERMENTION ?></a>
</div>




<!-- @@@ JS @@@ -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="assets/js/script.js"></script>


<!-- @@@ icon font @@@ -->
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>

</body>
</html>
