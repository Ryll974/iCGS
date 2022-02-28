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
    $choix_mois_num = $_SESSION['sess_mois_num'];
    $choix_mois_FR = $_SESSION['sess_mois_FR'];
    $choix_annee = $_SESSION['sess_annee'];

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
      <nav>
        <div class="navLeft">
          <a class="navbar-brand" href="http://localhost/iCGS/main.php">
            <img id="returnArrow" src="ressources/navBar/returnArrow.png" alt="retour page sondage">
          </a>
        </div>
        <div class="container dropdown dropdown-toggle caret-off navCenter">
          <a class="btn navbar-toggler" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img id="calendar" src="ressources/navBar/calendar.png" alt="calendrier">
          </a>
          <ul class="dropdown-menu dropdownMenu">
            <li><a class="dropdown-item dropdownItem" href="#">► Année</a></li>
              <div class="subnav-content">
                <a href="#">2022</a>
                <a href="#">2023</a>
                <a href="#">2024</a>
                <a href="#">2025</a>
              </div>
            <li><a class="dropdown-item dropdownItem" href="#">► Mois</a></li>
              <div class="subnav-content">
                <a href="modules/choix/tech_choix_01.php">Jan</a>
                <a href="modules/choix/tech_choix_02.php">Fev</a>
                <a href="modules/choix/tech_choix_03.php">Mar</a>
                <a href="modules/choix/tech_choix_04.php">Avr</a>
                <a href="modules/choix/tech_choix_05.php">Mai</a>
                <a href="modules/choix/tech_choix_06.php">Jun</a>
                <a href="modules/choix/tech_choix_07.php">Jul</a>
                <a href="modules/choix/tech_choix_08.php">Aoû</a>
                <a href="modules/choix/tech_choix_09.php">Sep</a>
                <a href="modules/choix/tech_choix_10.php">Oct</a>
                <a href="modules/choix/tech_choix_11.php">Nov</a>
                <a href="modules/choix/tech_choix_12.php">Dec</a>
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

    <div class = "tech">

    <img src="http://localhost/iCGS/ressources/images/Techs/<?php echo htmlspecialchars($id); ?>.png" width="64" height="64" alt="<?php echo htmlspecialchars($row['identifiant']); ?>" />
      <p style="font-family: 'Roboto', sans-serif;font-style: italic;color:orange;"> Technicien n° : <?php echo htmlspecialchars($id); ?>

    </div>

  </body>

</html>
