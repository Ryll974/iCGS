<?php 
    include("modules/connexiondb.php");
    include("modules/requete_affiche_techs.php");
?>

<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
    <div class="tech">
        <a href="http://localhost/iCGS/tech.php?id=<?php echo htmlspecialchars($row['id']); ?>&annee=<?php echo htmlspecialchars($choix_annee); ?>&mois=<?php echo htmlspecialchars($choix_mois_num); ?>&mois_FR=<?php echo htmlspecialchars($choix_mois_FR); ?>">
            <img src="http://localhost/iCGS/ressources/images/Techs/<?php echo htmlspecialchars($row['id']); ?>.png" width="110" height="110" alt="<?php echo htmlspecialchars($row['identifiant']); ?>" />
        </a>
    </div>
<?php endwhile; ?>