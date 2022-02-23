<?php 
// récupérer les Techniciens de la Base de Donnée iCGS (table: techs)

  $sql = "SELECT identifiant FROM techs ORDER BY nom";
   
  try{
 
   $stmt = $db->query($sql);
   $count = $stmt->rowCount();
   
   if($count == 0){
  
    $msgprono = "techniciens en cours d'enregistrement ...";
    
   }
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }

 
?>