<?php
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
            /******************** Your code ***********************/
            $_SESSION['sess_id']   = $row['identifiant'];
            $_SESSION['sess_nom'] = $row['nom'];
            $_SESSION['sess_prenom'] = $row['prenom'];
            $_SESSION['sess_email'] = $row['email'];
            $_SESSION['sess_choix'] = "random";

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