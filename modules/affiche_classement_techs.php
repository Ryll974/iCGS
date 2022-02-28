<?php 
    include("modules/connexiondb.php");
    include("modules/requete_affiche_techs.php");
?>

<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :

    // calcule le pourcentage global de satisfaction du technicien en cours (tables: avis_clients + techs)
    // moyenne des 4 questions aux clients

    // compter le nombre total d'avis du mois sélectionné :

$id_tech_en_cours = ($row['id']);

  $sql = "SELECT *
        FROM avis_clients
        JOIN techs 
        ON avis_clients.id_tech = techs.id
        WHERE YEAR(date_avis) = $choix_annee
        AND MONTH(date_avis) = $choix_mois_num
        AND id_tech = $id_tech_en_cours";

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

$total_avis = $count;

// compter le nombre total de questions du mois sélectionné :
// (4 questions par avis)

$total_questions = $count * 4;

  // compter le nombre total d'avis satisfaits (1) à la Question 1 du mois sélectionné :

  $sql = "SELECT id_tech,nom,prenom,q1,q2,q3,q4
        FROM avis_clients
        JOIN techs 
        ON avis_clients.id_tech = techs.id
        WHERE YEAR(date_avis) = $choix_annee
        AND MONTH(date_avis) = $choix_mois_num
        AND id_tech = $id_tech_en_cours
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

   $sql = "SELECT id_tech,nom,prenom,q1,q2,q3,q4
        FROM avis_clients
        JOIN techs 
        ON avis_clients.id_tech = techs.id
        WHERE YEAR(date_avis) = $choix_annee
        AND MONTH(date_avis) = $choix_mois_num
        AND id_tech = $id_tech_en_cours
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

   $sql = "SELECT id_tech,nom,prenom,q1,q2,q3,q4
        FROM avis_clients
        JOIN techs 
        ON avis_clients.id_tech = techs.id
        WHERE YEAR(date_avis) = $choix_annee
        AND MONTH(date_avis) = $choix_mois_num
        AND id_tech = $id_tech_en_cours
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

   $sql = "SELECT id_tech,nom,prenom,q1,q2,q3,q4
        FROM avis_clients
        JOIN techs 
        ON avis_clients.id_tech = techs.id
        WHERE YEAR(date_avis) = $choix_annee
        AND MONTH(date_avis) = $choix_mois_num
        AND id_tech = $id_tech_en_cours
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

   $sql = "SELECT id_tech,nom,prenom,q1,q2,q3,q4
        FROM avis_clients
        JOIN techs 
        ON avis_clients.id_tech = techs.id
        WHERE YEAR(date_avis) = $choix_annee
        AND MONTH(date_avis) = $choix_mois_num
        AND id_tech = $id_tech_en_cours
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

   $sql = "SELECT id_tech,nom,prenom,q1,q2,q3,q4
        FROM avis_clients
        JOIN techs 
        ON avis_clients.id_tech = techs.id
        WHERE YEAR(date_avis) = $choix_annee
        AND MONTH(date_avis) = $choix_mois_num
        AND id_tech = $id_tech_en_cours
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

   $sql = "SELECT id_tech,nom,prenom,q1,q2,q3,q4
        FROM avis_clients
        JOIN techs 
        ON avis_clients.id_tech = techs.id
        WHERE YEAR(date_avis) = $choix_annee
        AND MONTH(date_avis) = $choix_mois_num
        AND id_tech = $id_tech_en_cours
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

   $sql = "SELECT id_tech,nom,prenom,q1,q2,q3,q4
        FROM avis_clients
        JOIN techs 
        ON avis_clients.id_tech = techs.id
        WHERE YEAR(date_avis) = $choix_annee
        AND MONTH(date_avis) = $choix_mois_num
        AND id_tech = $id_tech_en_cours
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

// calcul du pourcentage global de satisfaction (indice) pour le technicien en cours dans le mois sélectionné :
// (comprend les avis aux questions 1, 2, 3 et 4)

$total_satisfaits = $total_q1_1 + $total_q2_1 + $total_q3_1 + $total_q4_1;

$total_neutres = $total_q1_2 + $total_q2_2 + $total_q3_2 + $total_q4_2;

if ($total_avis != 0) {
  $indice_tech_en_cours = round(($total_satisfaits + $total_neutres) / $total_questions);
}else{
  $indice_tech_en_cours = 0; 
}

echo "coucou";

?>
    </br>
    <p style="font-family: 'Roboto', sans-serif;font-style: italic;color:white;">Technicien n°<?php echo htmlspecialchars($row['id']); ?> <?php echo htmlspecialchars($row['prenom']); ?> <?php echo htmlspecialchars($row['nom']); ?>
    <p style="font-family: 'Roboto', sans-serif;font-style: italic;color:white;">indice :  <?php echo htmlspecialchars($indice_tech_en_cours); ?> % de satisfaction
      
<?php endwhile; ?>
