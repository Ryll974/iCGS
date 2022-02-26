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

$total_questions = $count * 4;

  // compter le nombre total d'avis satisfaits (1) à la Question 1 du mois sélectionné :

  $sql = "SELECT * FROM avis_clients 
          WHERE YEAR(date_avis) = $choix_annee
          AND MONTH(date_avis) = $choix_mois_num
          AND q1 = 1";

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

 $total_q1_1 = $count * 100;

   // compter le nombre total d'avis satisfaits (1) à la Question 2 du mois sélectionné :

   $sql = "SELECT * FROM avis_clients 
           WHERE YEAR(date_avis) = $choix_annee
           AND MONTH(date_avis) = $choix_mois_num
           AND q2 = 1";

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

$total_q2_1 = $count * 100;

   // compter le nombre total d'avis satisfaits (1) à la Question 3 du mois sélectionné :

   $sql = "SELECT * FROM avis_clients 
           WHERE YEAR(date_avis) = $choix_annee
           AND MONTH(date_avis) = $choix_mois_num
           AND q3 = 1";

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

$total_q3_1 = $count * 100;

   // compter le nombre total d'avis satisfaits (1) à la Question 4 du mois sélectionné :

   $sql = "SELECT * FROM avis_clients 
           WHERE YEAR(date_avis) = $choix_annee
           AND MONTH(date_avis) = $choix_mois_num
           AND q4 = 1";

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

$total_q4_1 = $count * 100;

   // compter le nombre total d'avis neutres (2) à la Question 1 du mois sélectionné :

   $sql = "SELECT * FROM avis_clients 
           WHERE YEAR(date_avis) = $choix_annee
           AND MONTH(date_avis) = $choix_mois_num
           AND q1 = 2";

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

$total_q1_2 = $count * 50;

   // compter le nombre total d'avis neutres (2) à la Question 2 du mois sélectionné :

   $sql = "SELECT * FROM avis_clients 
           WHERE YEAR(date_avis) = $choix_annee
           AND MONTH(date_avis) = $choix_mois_num
           AND q2 = 2";

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

$total_q2_2 = $count * 50;

   // compter le nombre total d'avis neutres (2) à la Question 3 du mois sélectionné :

   $sql = "SELECT * FROM avis_clients 
           WHERE YEAR(date_avis) = $choix_annee
           AND MONTH(date_avis) = $choix_mois_num
           AND q3 = 2";

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

$total_q3_2 = $count * 50;

   // compter le nombre total d'avis neutres (2) à la Question 4 du mois sélectionné :

   $sql = "SELECT * FROM avis_clients 
           WHERE YEAR(date_avis) = $choix_annee
           AND MONTH(date_avis) = $choix_mois_num
           AND q4 = 2";

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

$total_q4_2 = $count * 50;

$total_satisfaits = $total_q1_1 + $total_q2_1 + $total_q3_1 + $total_q4_1;

$total_neutres = $total_q1_2 + $total_q2_2 + $total_q3_2 + $total_q4_2;

if ($total_questions != 0) {
  $satisfaction_mois = round(($total_satisfaits + $total_neutres) / $total_questions);
}else{
  $satisfaction_mois = 0;
}

?>