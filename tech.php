<?php 
session_start();
if(isset($_SESSION['sess_id']) && $_SESSION['sess_nom'] != "") {
	
} else { 
	header('location:index.php');
}
?>

<!-- définition des variables choix_mois et choix_annee qui déterminent le mois qui sera affiché -->
<!-- mois_num comprend les valeurs des mois de 1 à 12 et mois_FR de Janvier à Décembre -->
<!-- ce sont des variables de session qui sont définies dans requete_login.php -->
<!-- et modifiées ensuite par les modules php choix*.php en fonction des éléments choisis par l'utilisateur en cliquant sur l'icone calendrier -->
<?php

    $choix_mois_num = $_GET['mois'];
    $choix_mois_FR = $_GET['mois_FR'];
    $choix_annee = $_GET['annee'];

  // récupère dans la variable id la valeur postée par le choix du technicien sélectionné dans la barre de scroll
  
  $id = $_GET['id'];

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
    <?php include("modules/requete_calcul_pourcentage_global_mois.php");?>
    <?php include("modules/div_navBar.php");?>
    <?php include("modules/requete_stats_tech.php");?>
      <nav>
        <div class="navLeft">
          <a class="navbar-brand" href="http://localhost/iCGS/main.php">
            <img id="returnArrow" src="ressources/navBar/returnArrow.png" alt="retour page sondage">
          </a>
        </div>
        <div id="btnCalendrier" class="container dropdown dropdown-toggle caret-off navCenter">
          <a class="btn navbar-toggler" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img id="calendar" src="ressources/navBar/calendar.png" alt="calendrier">
          </a>
          <ul class="dropdown-menu dropdownMenu">
            <li><a class="dropdown-item dropdownItem" href="#">► Année</a></li>
              <div class="subnav-content">
                <?php include("modules/calendrier_affiche_annees.php");?>
              </div>
            <li><a class="dropdown-item dropdownItem" href="#">► Mois</a></li>
              <div class="subnav-content">
                <a href="http://localhost/iCGS/tech.php?id=<?php echo htmlspecialchars($row['id']); ?>&mois=<?php echo htmlspecialchars(1); ?>&mois_FR=<?php echo htmlspecialchars("Janvier"); ?>">Jan</a>
                <a href="http://localhost/iCGS/tech.php?id=<?php echo htmlspecialchars($row['id']); ?>&mois=<?php echo htmlspecialchars(2); ?>&mois_FR=<?php echo htmlspecialchars("Février"); ?>">Fev</a>
                <a href="http://localhost/iCGS/tech.php?id=<?php echo htmlspecialchars($row['id']); ?>&mois=<?php echo htmlspecialchars(3); ?>&mois_FR=<?php echo htmlspecialchars("Mars"); ?>">Mar</a>
                <a href="http://localhost/iCGS/tech.php?id=<?php echo htmlspecialchars($row['id']); ?>&mois=<?php echo htmlspecialchars(4); ?>&mois_FR=<?php echo htmlspecialchars("Avril"); ?>">Avr</a>
                <a href="http://localhost/iCGS/tech.php?id=<?php echo htmlspecialchars($row['id']); ?>&mois=<?php echo htmlspecialchars(5); ?>&mois_FR=<?php echo htmlspecialchars("Mai"); ?>">Mai</a>
                <a href="http://localhost/iCGS/tech.php?id=<?php echo htmlspecialchars($row['id']); ?>&mois=<?php echo htmlspecialchars(6); ?>&mois_FR=<?php echo htmlspecialchars("Juin"); ?>">Jun</a>
                <a href="http://localhost/iCGS/tech.php?id=<?php echo htmlspecialchars($row['id']); ?>&mois=<?php echo htmlspecialchars(7); ?>&mois_FR=<?php echo htmlspecialchars("Juillet"); ?>">Jul</a>
                <a href="http://localhost/iCGS/tech.php?id=<?php echo htmlspecialchars($row['id']); ?>&mois=<?php echo htmlspecialchars(8); ?>&mois_FR=<?php echo htmlspecialchars("Août"); ?>">Aoû</a>
                <a href="http://localhost/iCGS/tech.php?id=<?php echo htmlspecialchars($row['id']); ?>&mois=<?php echo htmlspecialchars(9); ?>&mois_FR=<?php echo htmlspecialchars("Septembre"); ?>">Sep</a>
                <a href="http://localhost/iCGS/tech.php?id=<?php echo htmlspecialchars($row['id']); ?>&mois=<?php echo htmlspecialchars(10); ?>&mois_FR=<?php echo htmlspecialchars("Octobre"); ?>">Oct</a>
                <a href="http://localhost/iCGS/tech.php?id=<?php echo htmlspecialchars($row['id']); ?>&mois=<?php echo htmlspecialchars(11); ?>&mois_FR=<?php echo htmlspecialchars("Novembre"); ?>">Nov</a>
                <a href="http://localhost/iCGS/tech.php?id=<?php echo htmlspecialchars($row['id']); ?>&mois=<?php echo htmlspecialchars(12); ?>&mois_FR=<?php echo htmlspecialchars("Décembre"); ?>">Dec</a>
              </div>
          </ul>
          <a id="displayMonth"><?php echo $choix_mois_FR; ?> <?php echo $choix_annee; ?></a>
        </div>

        <div class="dropdown dropdown-toggle caret-off navRight">
          <a class="btn navbar-toggler" href="#" role="button" id="buttonMenu" data-bs-toggle="dropdown" aria-expanded="false">
            <img id="menuHam" src="ressources/navBar/menuHam.png" alt="menu hamburger">
          </a>
          <ul class="dropdown-menu dropdownMenu">
            <li><a class="dropdown-item dropdownItem" href="modules/choix/choix_random.php">avis aléatoires</a></li>
            <li><a class="dropdown-item dropdownItem" href="modules/choix/choix_recent.php">+ récents</a></li>
            <li><a class="dropdown-item dropdownItem" href="modules/choix/choix_positive.php">+ positifs</a></li>
            <li><a class="dropdown-item dropdownItem" href="modules/choix/choix_negative.php">+ négatifs</a></li>
            <li><a class="dropdown-item dropdownItem" href="ranking.php">classement techniciens</a></li>
          </ul>
        </div>

        <br>
        <span id="pageType" class="navbar-text">
        <?php echo $prenom_tech; ?> <?php echo $nom_tech; ?>
        </span>
      </nav>
    </div>

    <!-- affichage d'une ligne de séparation blanche -->
    <div id="whiteLine" class="container-fluid"></div>

    <!-- affichage du cercle qui affiche le portrait du technicien selectionné -->
    <!-- il est positionné sur le bas de la barre de navigation, au centre de l'écran, à cheval sur la ligne de séparation blanche -->
    <?php include("modules/affiche_portrait_tech.php");?>

    <!-- affichage de la fiche du technicien sélectionné en fonction du mois sélectionné -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 boxFormat decalage">
      <?php include("modules/affiche_tech.php");?>
    </div>

  <!-- appel du JavaScript custom iCGS -->
  <script src="js/icgs.js"></script>

  </body>

</html>
