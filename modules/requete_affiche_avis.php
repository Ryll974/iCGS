<?php 
// récupérer les avis de la Base de Donnée iCGS (table: avis_clients)

$choix = "défaut";

  switch ($choix_avis) {

    case "random":
      $sql = "SELECT * FROM avis_clients ORDER BY RAND() LIMIT 50";
      $choix= "aléatoire";
      break;
    case "recent":
      $sql = "SELECT * FROM avis_clients ORDER BY date_avis DESC LIMIT 50";
      $choix= "récent";
      break;
    case "positive":
      $sql = "SELECT * FROM avis_clients WHERE ng > 3 ORDER BY ng DESC, date_avis DESC LIMIT 50";
      $choix= "positif";
      break;
    case "negative":
      $sql = "SELECT * FROM avis_clients WHERE ng < 3 ORDER BY ng ASC, date_avis DESC LIMIT 50";
      $choix= "négatif";
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