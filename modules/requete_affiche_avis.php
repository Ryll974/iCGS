<?php 
// récupérer les avis de la Base de Donnée iCGS (table: avis_clients)

  $sql = "SELECT * FROM avis_clients ORDER BY RAND() LIMIT 50";
   
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