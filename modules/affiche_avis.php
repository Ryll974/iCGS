<?php 
    include("modules/connexiondb.php");
    include("modules/requete_affiche_avis.php");
?>

<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>

    <div>
        <a>
            <p class="avisClients"> avis : <?php echo $choix; ?> note : <?php echo htmlspecialchars($row['ng']); ?> -- <?php echo htmlspecialchars($row['date_avis']); ?> -- avis utilisateur n° <?php echo htmlspecialchars($row['id']); ?></p>
        </a>
    </div>

<?php endwhile; ?>