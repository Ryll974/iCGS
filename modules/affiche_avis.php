<?php 
    include("modules/connexiondb.php");
    include("modules/requete_affiche_avis.php");
?>

<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>

    <div>
        <a>
            <p class="avisClients"> avis utilisateur n° <?php echo htmlspecialchars($row['id']); ?></p>
        </a>
    </div>

<?php endwhile; ?>