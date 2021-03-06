<?php 
session_start();
if(isset($_SESSION['sess_id']) && $_SESSION['sess_nom'] != "") {
	
} else { 
	header('location:index.php');
}
?>

<!-- définition des variables choix_mois et choix_annee qui déterminent le mois qui sera affiché pour les avis  -->
<!-- ainsi que le pourcentage de satisfaction global de ce mois -->
<!-- par défaut initialisé à la valeur du mois et de l'année en cours -->
<!-- mois_num comprend les valeurs des mois de 1 à 12 et mois_FR de Janvier à Décembre -->
<!-- ce sont des variables de session qui sont définies dans requete_login.php -->
<!-- et modifiées ensuite par les modules php choix*.php en fonction des éléments choisis par l'utilisateur en cliquant sur l'icone calendrier -->
<?php
    $choix_mois_num = $_SESSION['sess_mois_num'];
    $choix_mois_FR = $_SESSION['sess_mois_FR'];
    $choix_annee = $_SESSION['sess_annee'];
?>

<!-- définition de la variable choix_avis qui détermine les avis clients qui seront affichés -->
<!-- par défaut initialisé à une valeur nulle qui correspond à une affichage aléatoire -->
<!-- c'est une variable de session défini dans requete_login.php -->
<!-- et modifiée ensuite par les modules php choix*.php en fonction des éléments choisis par l'utilisateur dans le menu -->
<?php
    $choix_avis = $_SESSION['sess_choix'];
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

    <title>iCGS main</title>

  </head>

  <body>

    <!-- affichage de la barre de navigation -->
    <?php include("modules/requete_calcul_pourcentage_global_mois.php");?>
    <?php include("modules/div_navBar.php");?>
      <nav>
        <div class="navLeft">
          <a class="navbar-brand" href="modules/logout.php">
            <img id="returnArrow" src="ressources/navBar/returnArrow.png" alt="déconnexion">
          </a>
        </div>
        <div class="container dropdown dropdown-toggle caret-off navCenter">
          <a id="btnCalendrier" class="btn navbar-toggler" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img id="calendar" src="ressources/navBar/calendar.png" alt="calendrier">
          </a>
          <ul class="dropdown-menu dropdownMenu">
            <li><a class="dropdown-item dropdownItem" href="#">► Année</a></li>
              <div class="subnav-content">
                <?php include("modules/calendrier_affiche_annees.php");?>
              </div>
            <li><a class="dropdown-item dropdownItem" href="#">► Mois</a></li>
              <div class="subnav-content">
                <a href="modules/choix/main_choix_01.php">Jan</a>
                <a href="modules/choix/main_choix_02.php">Fev</a>
                <a href="modules/choix/main_choix_03.php">Mar</a>
                <a href="modules/choix/main_choix_04.php">Avr</a>
                <a href="modules/choix/main_choix_05.php">Mai</a>
                <a href="modules/choix/main_choix_06.php">Jun</a>
                <a href="modules/choix/main_choix_07.php">Jul</a>
                <a href="modules/choix/main_choix_08.php">Aoû</a>
                <a href="modules/choix/main_choix_09.php">Sep</a>
                <a href="modules/choix/main_choix_10.php">Oct</a>
                <a href="modules/choix/main_choix_11.php">Nov</a>
                <a href="modules/choix/main_choix_12.php">Dec</a>
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
          Sondage
        </span>
      </nav>
    </div>

    <!-- affichage d'une ligne de séparation blanche -->
    <div id="whiteLine" class="container-fluid"></div>

    <!-- affichage du cercle qui indique le % de satisfaction du mois en cours (ou du mois sélectionné) -->
    <!-- il est positionné sur le bas de la barre de navigation, au centre de l'écran, à cheval sur la ligne de séparation blanche -->
    <?php include("modules/affiche_pourcentage_global_mois.php");?>

    <!-- codage des zones d'affichage des message et d'indice de satisfaction aux 4 questions -->
    <div class="container-fluid decalage">
      <div class="container">
        <div class="row">

          <!-- zones d'affichage des avis clients -->
          <div id="displayMessages" class="col-xs-9 col-sm-9 col-md-9 col-lg-9 boxFormat">
            <div class="scroll_avis">
              <?php include("modules/affiche_avis.php");?>
            </div>
          </div>

          <!-- espace entre les deux zones d'affichage -->
          <article class="col-xs-1 col-sm-1 col-md-1 col-lg-1 boxFormat">
          </article>
        
          <!-- zones d'affichage des indices de satisfaction aux 4 questions -->
          <div id="displayQuestions" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 boxFormat">
            <?php include("modules/affiche_satisfaction_questions.php");?>
          </div>

        </div>
      </div>
    </div>

    <!-- codage de la zone d'affichage des techniciens -->
    <div class="techs">
      <?php include("modules/affiche_techs.php");?>
    </div>

  <!-- appel du JavaScript custom iCGS -->
  <script src="js/icgs.js"></script>

  </body>

</html>
