<?php 

// récupérer les avis de la Base de Donnée iCGS (table: avis_clients)

  switch ($choix_avis) {

    case "random":
      $sql = "SELECT * FROM avis_clients WHERE YEAR(date_avis) = $choix_annee AND MONTH(date_avis) = $choix_mois_num ORDER BY RAND() LIMIT 50";
      break;
    case "recent":
      $sql = "SELECT * FROM avis_clients WHERE YEAR(date_avis) = $choix_annee AND MONTH(date_avis) = $choix_mois_num ORDER BY date_avis DESC LIMIT 50";
      break;
    case "positive":
      $sql = "SELECT * FROM avis_clients WHERE YEAR(date_avis) = $choix_annee AND MONTH(date_avis) = $choix_mois_num AND ng > 3 ORDER BY ng DESC, date_avis DESC LIMIT 50";
      break;
    case "negative":
      $sql = "SELECT * FROM avis_clients WHERE YEAR(date_avis) = $choix_annee AND MONTH(date_avis) = $choix_mois_num AND ng < 3 ORDER BY ng ASC, date_avis DESC LIMIT 50";
      break;

  }

  try{
 
   $stmt = $db->query($sql);
   $count = $stmt->rowCount();
   
   if($count == 0){
  
    $msgprono = "avis clients en cours d'enregistrement ...";
    
   }
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }

?>