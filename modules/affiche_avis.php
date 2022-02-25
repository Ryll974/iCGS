<?php 
    include("modules/connexiondb.php");
    include("modules/requete_affiche_avis.php");
?>

<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>

    <div>
        <a>
            <p class="avisClients"> note : <?php echo htmlspecialchars($row['ng']); ?> -- <?php echo htmlspecialchars($row['date_avis']); ?> -- <?php echo htmlspecialchars($row['avis']); ?></p>
        </a>
    </div>

<?php endwhile; ?>