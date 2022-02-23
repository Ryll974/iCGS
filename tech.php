<?php 
session_start();
if(isset($_SESSION['sess_id']) && $_SESSION['sess_nom'] != "") {
	
} else { 
	header('location:index.php');
}
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

    <title>iCGS tech</title>

  </head>

  <body>

    <!-- affichage de la barre de navigation -->
    <div id="navBar" class="container-fluid">
      <nav>
        <div class="navLeft">
          <a class="navbar-brand" href="http://localhost/iCGS/main.php">
            <img id="returnArrow" src="ressources/navBar/returnArrow.png" alt="retour page sondage">
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
            <li><a class="dropdown-item dropdownItem" href="#">avis aléatoires</a></li>
            <li><a class="dropdown-item dropdownItem" href="#">+ pertinents</a></li>
            <li><a class="dropdown-item dropdownItem" href="#">+ récents</a></li>
            <li><a class="dropdown-item dropdownItem" href="#">+ positifs</a></li>
            <li><a class="dropdown-item dropdownItem" href="#">+ négatifs</a></li>
            <li><a class="dropdown-item dropdownItem" href="ranking.html">classement techniciens</a></li>
          </ul>
        </div>

        <br>
        <span id="pageType" class="navbar-text">
          Technicien
        </span>
      </nav>
    </div>

    <!-- affichage d'une ligne de séparation blanche -->
    <div id="whiteLine" class="container-fluid"></div>

    <!-- affichage du cercle central blanc positionné sur le bas de la barre de navigation -->
    <div id="centralCircle" class="container-fluid"></div>

  </body>

</html>
