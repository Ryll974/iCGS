<?php
    /* définition des variables intermédiaires de mois et année en fonction de la date actuelle */

    $annee = date("Y");
    $mois_num = date("m");

    /* transformation de la valeur numérique du mois en sa signification en FR */

    switch ($mois_num) {
      case 1:
        $mois_FR = "Janvier";
        break;
      case 2:
        $mois_FR = "Février";
        break;
      case 3:
        $mois_FR = "Mars";
        break;
      case 4:
        $mois_FR = "Avril";
        break;
      case 5:
        $mois_FR = "Mai";
        break;
      case 6:
        $mois_FR = "Juin";
        break;
      case 7:
        $mois_FR = "Juillet";
        break;
      case 8:
        $mois_FR = "Août";
        break;
      case 9:
        $mois_FR = "Septembre";
        break;
      case 10:
        $mois_FR = "Octobre";
        break;
      case 11:
        $mois_FR = "Novembre";
        break;
      case 12:
        $mois_FR = "Décembre";
        break;
      }

    $msg = ""; 
    if(isset($_POST['submitBtnLogin'])) {
      $identifiant = trim($_POST['identifiant']);
      $mdp = trim($_POST['mdp']);
      if($identifiant != "" && $mdp != "") {
        try {
          $query = "select * from `login` where `identifiant`=:identifiant and `mdp`=:mdp";
          $stmt = $db->prepare($query);
          $stmt->bindParam('identifiant', $identifiant, PDO::PARAM_STR);
          $stmt->bindValue('mdp', $mdp, PDO::PARAM_STR);
          $stmt->execute();
          $count = $stmt->rowCount();
          $row   = $stmt->fetch(PDO::FETCH_ASSOC);
          if($count == 1 && !empty($row)) {
            /* définition des variables de session basées sur la BDD iCGS */
            $_SESSION['sess_id']   = $row['identifiant'];
            $_SESSION['sess_nom'] = $row['nom'];
            $_SESSION['sess_prenom'] = $row['prenom'];
            $_SESSION['sess_email'] = $row['email'];
            /* définition des variables de session basées sur les choix utilisateur dans l'appli WEB */
            $_SESSION['sess_choix'] = "random";
            $_SESSION['sess_annee'] = $annee;
            $_SESSION['sess_mois_num'] = $mois_num;
            $_SESSION['sess_mois_FR'] = $mois_FR;

            header('location:main.php');

          } else {
            $msg = "Identifiant ou mot de passe incorrect!";
          }
        } catch (PDOException $e) {
          echo "Error : ".$e->getMessage();
        }
      } else {
        $msg = "Remplir les champs requis!";
      }
    }
  
    ?>