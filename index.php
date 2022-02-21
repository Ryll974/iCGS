<?php
session_start();
  include("modules/connexiondb.php");
	include("modules/requete_login.php");
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
    <!-- intégration du CSS custom à la page login -->
    <link rel="stylesheet" type="text/css" href="css/styleICGS.css">
    <!-- appel du JavaScript Bootstrap Bundle avec Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <title>iCGS login</title>

  </head>

  <body>

    <div id="loginDiv" class="container-fluid">
      <div class="container">
        <div class="row">
          <img id="pplusLogo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" src="ressources/login/pplus-logo-wb.png" height="72" alt="Particules Plus Logo">
        </div>
        <div class="formCentered">
          <form method='POST'>
            <label class="sr-only loginText">ID</label>
            <input name="identifiant" type="login" id="loginId" class="form-control" placeholder="login" required autofocus>
            <label class="sr-only loginText">Password</label>
            <input name="mdp" type="password" id="loginPassword" class="form-control" placeholder="password">
            </div class="sr-only">
              <span style="font-family: 'Roboto', sans-serif;font-style: italic;color:white;"><?php echo @$msg;?></span>
            </div>
            <button type="submit" name="submitBtnLogin" id="loginButton" class="btn btn-lg btn-primary btn-signin" type="submit">Login</button>
          </form>
        </div>
      </div>
    </div>

  </body>

</html>
