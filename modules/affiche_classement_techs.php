<?php 

// initialisations des variables du classement :

// médaille d'or
$tech_num_1_id = 0;
$tech_num_1_prenom = "aucunes";
$tech_num_1_nom = "données";
$tech_num_1_indice_brut = 0;
$tech_num_1_indice_arrondi = 0;

// médaille d'argent
$tech_num_2_id = 0;
$tech_num_2_prenom = "aucunes";
$tech_num_2_nom = "données";
$tech_num_2_indice_brut = 0;
$tech_num_2_indice_arrondi = 0;

// médaille de bronze
$tech_num_3_id = 0;
$tech_num_3_prenom = "aucunes";
$tech_num_3_nom = "données";
$tech_num_3_indice_brut = 0;
$tech_num_3_indice_arrondi = 0;

// modules php de connexion à la BDD et de listage de l'ensemble des techniciens
include("modules/connexiondb.php");
include("modules/requete_affiche_techs.php");

// boucle qui passe par l'ensemble des techniciens de la BDD

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :

// calcule le pourcentage global de satisfaction du technicien en cours (tables: avis_clients + techs)
// moyenne des 4 questions aux clients

// compter le nombre total d'avis du mois sélectionné pour le technicien :

$id_tech_en_cours = ($row['id']);
$prenom_tech_en_cours = ($row['prenom']);
$nom_tech_en_cours = ($row['nom']);

  $sql = "SELECT *
        FROM avis_clients
        JOIN techs 
        ON avis_clients.id_tech = techs.id
        WHERE YEAR(date_avis) = $choix_annee
        AND MONTH(date_avis) = $choix_mois_num
        AND id_tech = $id_tech_en_cours";

try{
 $stmt_ct = $db->query($sql);
 $count_ct = $stmt_ct->rowCount();
 if($count_ct == 0){
  $msgprono = "avis clients en cours d'enregistrement ...";
  }
 if($stmt_ct === false){
  die("Erreur");
  }
}catch (PDOException $e){
  echo $e->getMessage();
}

$total_avis = $count_ct;

// compter le nombre total de questions du mois sélectionné pour le technicien :
// (4 questions par avis)

$total_questions = $count_ct * 4;

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
  $stmt_ct = $db->query($sql);
  $count_ct = $stmt_ct->rowCount();
  if($count_ct == 0){
   $msgprono = "avis clients en cours d'enregistrement ...";
   }
  if($stmt_ct === false){
   die("Erreur");
   }
 }catch (PDOException $e){
   echo $e->getMessage();
 }

 $total_q1_1 = $count_ct * 100;

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
$stmt_ct = $db->query($sql);
$count_ct = $stmt_ct->rowCount();
if($count_ct == 0){
$msgprono = "avis clients en cours d'enregistrement ...";
}
if($stmt_ct === false){
die("Erreur");
}
}catch (PDOException $e){
echo $e->getMessage();
}

$total_q2_1 = $count_ct * 100;

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
$stmt_ct = $db->query($sql);
$count_ct = $stmt_ct->rowCount();
if($count_ct == 0){
$msgprono = "avis clients en cours d'enregistrement ...";
}
if($stmt_ct === false){
die("Erreur");
}
}catch (PDOException $e){
echo $e->getMessage();
}

$total_q3_1 = $count_ct * 100;

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
$stmt_ct = $db->query($sql);
$count_ct = $stmt_ct->rowCount();
if($count_ct == 0){
$msgprono = "avis clients en cours d'enregistrement ...";
}
if($stmt_ct === false){
die("Erreur");
}
}catch (PDOException $e){
echo $e->getMessage();
}

$total_q4_1 = $count_ct * 100;

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
$stmt_ct = $db->query($sql);
$count_ct = $stmt_ct->rowCount();
if($count_ct == 0){
$msgprono = "avis clients en cours d'enregistrement ...";
}
if($stmt_ct === false){
die("Erreur");
}
}catch (PDOException $e){
echo $e->getMessage();
}

$total_q1_2 = $count_ct * 50;

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
$stmt_ct = $db->query($sql);
$count_ct = $stmt_ct->rowCount();
if($count_ct == 0){
$msgprono = "avis clients en cours d'enregistrement ...";
}
if($stmt_ct === false){
die("Erreur");
}
}catch (PDOException $e){
echo $e->getMessage();
}

$total_q2_2 = $count_ct * 50;

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
$stmt_ct = $db->query($sql);
$count_ct = $stmt_ct->rowCount();
if($count_ct == 0){
$msgprono = "avis clients en cours d'enregistrement ...";
}
if($stmt_ct === false){
die("Erreur");
}
}catch (PDOException $e){
echo $e->getMessage();
}

$total_q3_2 = $count_ct * 50;

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
$stmt_ct = $db->query($sql);
$count_ct = $stmt_ct->rowCount();
if($count_ct == 0){
$msgprono = "avis clients en cours d'enregistrement ...";
}
if($stmt === false){
die("Erreur");
}
}catch (PDOException $e){
echo $e->getMessage();
}

$total_q4_2 = $count_ct * 50;

// calcul du pourcentage global de satisfaction (indice) pour le technicien en cours dans le mois sélectionné :
// (comprend les avis aux questions 1, 2, 3 et 4)

$total_satisfaits = $total_q1_1 + $total_q2_1 + $total_q3_1 + $total_q4_1;

$total_neutres = $total_q1_2 + $total_q2_2 + $total_q3_2 + $total_q4_2;

if ($total_avis != 0) {
  $indice_tech_en_cours_brut = ($total_satisfaits + $total_neutres) / $total_questions;
  $indice_tech_en_cours_arrondi = round(($total_satisfaits + $total_neutres) / $total_questions);
}else{
  $indice_tech_en_cours_brut = 0; 
}

// Algorythme de classement des Techniciens, du n° 1 au n° 3 pour affichage ultérieur

// test de l'indice de satisfaction du technicien en cours pour déterminer sa place dans le classement :

if ($indice_tech_en_cours_brut > $tech_num_1_indice_brut) {
    // passer le Tech n°2 en 3eme position
    $tech_num_3_id = $tech_num_2_id;
    $tech_num_3_prenom = $tech_num_2_prenom;
    $tech_num_3_nom = $tech_num_2_nom;
    $tech_num_3_indice_brut = $tech_num_2_indice_brut;
    $tech_num_3_indice_arrondi = $tech_num_2_indice_arrondi;
    // passer le Tech n°1 en 2eme position
    $tech_num_2_id = $tech_num_1_id;
    $tech_num_2_prenom = $tech_num_1_prenom;
    $tech_num_2_nom = $tech_num_1_nom;
    $tech_num_2_indice_brut = $tech_num_1_indice_brut;
    $tech_num_2_indice_arrondi = $tech_num_1_indice_arrondi;
    // passer le Tech en cours en 1ere position
    $tech_num_1_id = $id_tech_en_cours;
    $tech_num_1_prenom = $prenom_tech_en_cours;
    $tech_num_1_nom = $nom_tech_en_cours;
    $tech_num_1_indice_brut = $indice_tech_en_cours_brut;
    $tech_num_1_indice_arrondi = $indice_tech_en_cours_arrondi;
  }elseif ($indice_tech_en_cours_brut > $tech_num_2_indice_brut){
    // passer le Tech n°2 en 3eme position
    $tech_num_3_id = $tech_num_2_id;
    $tech_num_3_prenom = $tech_num_2_prenom;
    $tech_num_3_nom = $tech_num_2_nom;
    $tech_num_3_indice_brut = $tech_num_2_indice_brut;
    $tech_num_3_indice_arrondi = $tech_num_2_indice_arrondi;
    // passer le Tech en cours en 2eme position
    $tech_num_2_id = $id_tech_en_cours;
    $tech_num_2_prenom = $prenom_tech_en_cours;
    $tech_num_2_nom = $nom_tech_en_cours;
    $tech_num_2_indice_brut = $indice_tech_en_cours_brut;
    $tech_num_2_indice_arrondi = $indice_tech_en_cours_arrondi;
    
  }elseif (($indice_tech_en_cours_brut > $tech_num_3_indice_brut)){
    // passer le Tech en cours en 3eme position
    $tech_num_3_id = $id_tech_en_cours;
    $tech_num_3_prenom = $prenom_tech_en_cours;
    $tech_num_3_nom = $nom_tech_en_cours;
    $tech_num_3_indice_brut = $indice_tech_en_cours_brut;
    $tech_num_3_indice_arrondi = $indice_tech_en_cours_arrondi;
  }

endwhile; ?>

<div class = "tech">
    <img src="http://localhost/iCGS/ressources/images/Techs/<?php echo htmlspecialchars($tech_num_1_id); ?>.png" width="96" height="96" alt="<?php echo htmlspecialchars($row['identifiant']); ?>" />
    <p style="font-family: 'Roboto', sans-serif;font-style: italic;color:yellow;"> Technicien n° 1 : <?php echo htmlspecialchars($tech_num_1_prenom); ?> <?php echo htmlspecialchars($tech_num_1_nom); ?> avec <?php echo htmlspecialchars($tech_num_1_indice_brut); ?>%
    </br>
    <img src="http://localhost/iCGS/ressources/images/Techs/<?php echo htmlspecialchars($tech_num_2_id); ?>.png" width="96" height="96" alt="<?php echo htmlspecialchars($row['identifiant']); ?>" />
    <p style="font-family: 'Roboto', sans-serif;font-style: italic;color:white;"> Technicien n° 2 : <?php echo htmlspecialchars($tech_num_2_prenom); ?> <?php echo htmlspecialchars($tech_num_2_nom); ?> avec <?php echo htmlspecialchars($tech_num_2_indice_brut); ?>%
    </br>
    <img src="http://localhost/iCGS/ressources/images/Techs/<?php echo htmlspecialchars($tech_num_3_id); ?>.png" width="96" height="96" alt="<?php echo htmlspecialchars($row['identifiant']); ?>" />
    <p style="font-family: 'Roboto', sans-serif;font-style: italic;color:orange;"> Technicien n° 3 : <?php echo htmlspecialchars($tech_num_3_prenom); ?> <?php echo htmlspecialchars($tech_num_3_nom); ?> avec <?php echo htmlspecialchars($tech_num_3_indice_brut); ?>%
</div>