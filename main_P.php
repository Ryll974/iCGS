<?php 
session_start();
if(isset($_SESSION['sess_id']) && $_SESSION['sess_nom'] != "") {
	
} else { 
	header('location:index.php');
}
?>

<!-- définition de la variable choix_avis qui détermine les avis clients qui seront affichés -->
<!-- par défaut initialisé à une valeur nulle qui correspond à une affichage aléatoire -->
<?php
  $choix_avis = "positive";
?>


<!doctype html>
<html lang="fr">

  <head>

    <!-- meta tags requis -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- intégration de la fonte Google Roboto pour les titres & le texte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <!-- intégration du CSS Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- intégration du CSS custom à la page principale / Sondage -->
    <link rel="stylesheet" type="text/css" href="css/styleICGS.css">
    <!-- appel du JavaScript Bootstrap Bundle avec Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- appel du JavaScript custom à la page principale / Sondage -->
    <script src="js/icgs.js"></script>

    <title>iCGS main</title>

  </head>

  <body>

    <!-- affichage de la barre de navigation -->
    <div id="navBar" class="container-fluid">
      <nav>
        <div class="navLeft">
          <a class="navbar-brand" href="modules/logout.php">
            <img id="returnArrow" src="ressources/navBar/returnArrow.png" alt="retour page login">
          </a>
        </div>
        <div class="container navCenter">
          <a class="active" href="#">
            <img id="calendar" src="ressources/navBar/calendar.png" alt="calendrier">
          </a>
          <a id="displayMonth" href="#afficheMois">Juin 2021</a>
        </div>

        <div class="dropdown dropdown-toggle caret-off navRight">
          <a class="btn navbar-toggler" href="#" role="button" id="buttonMenu" data-bs-toggle="dropdown" aria-expanded="false">
            <img id="menuHam" src="ressources/navBar/menuHam.png" alt="menu hamburger">
          </a>
          <ul class="dropdown-menu dropdownMenu">
            <li><a class="dropdown-item dropdownItem" href="main.php">avis aléatoires</a></li>
            <li><a class="dropdown-item dropdownItem" href="main_R.php">+ récents</a></li>
            <li><a class="dropdown-item dropdownItem" href="main_P.php">+ positifs</a></li>
            <li><a class="dropdown-item dropdownItem" href="main_N.php">+ négatifs</a></li>
            <li><a class="dropdown-item dropdownItem" href="ranking.php">classement techniciens</a></li>
          </ul>
        </div>

        <br>
        <span id="pageType" class="navbar-text">
          Sondage
        </span>
      </nav>
    </div>

    <!-- affichage d'une ligne de séparation blanche -->
    <div id="whiteLine" class="container-fluid"></div>

    <!-- affichage du cercle qui indique le % de satisfaction du mois en cours (ou du mois sélectionné) -->
    <!-- il est positionné sur le bas de la barre de navigation, au centre de l'écran, à cheval sur la ligne de séparation blanche -->
    <div id="circleBorder" class="container-fluid">
      <span id="percentageScore" class="container align-middle">
        81
      </span>
    </div>

    <!-- codage des zones d'affichage des message et d'indice de satisfaction aux 4 questions -->
    <div class="container-fluid">
      <div class="container">
        <div class="row">

          <div id="displayMessages" class="col-xs-9 col-sm-9 col-md-9 col-lg-9 boxFormat">
            <?php include("modules/affiche_avis.php");?>
          </div>

          <article class="col-xs-1 col-sm-1 col-md-1 col-lg-1 boxFormat">

          </article>
        
          <article id="displayQuestions" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 boxFormat">
            
          </article>

        </div>
      </div>
    </div>

    <!-- codage de la zone d'affichage des techniciens -->
    <div class="techs">
      <?php include("modules/affiche_techs.php");?>
    </div>

  </body>

</html>
