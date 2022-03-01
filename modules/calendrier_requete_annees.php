<?php

$sql = "SELECT DISTINCT YEAR(date_avis) FROM avis_clients ORDER BY date_avis ASC";
   
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