<?php 
    include("modules/connexiondb.php");
    include("modules/requete_affiche_techs.php");
?>

<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
    <div class="tech">
        <img src="http://localhost/iCGS/ressources/images/Techs/<?php echo htmlspecialchars($row['identifiant']); ?>.png" width="110" height="110" alt="<?php echo htmlspecialchars($row['identifiant']); ?>" />
    </div>
<?php endwhile; ?>