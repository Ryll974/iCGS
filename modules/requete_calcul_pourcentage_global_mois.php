<?php

include("modules/connexiondb.php");

// calcule le pourcentage global de satisfaction (table: avis_clients)
// moyenne des 4 questions aux clients

  // compter le nombre total d'avis du mois sélectionné :

  $sql = "SELECT * FROM avis_clients WHERE YEAR(date_avis) = $choix_annee AND MONTH(date_avis) = $choix_mois_num";

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

$satisfaction_mois = 98;
$total_questions = $count * 4;

?>