<?php 
    include("modules/connexiondb.php");
    include("modules/requete_affiche_avis.php");
?>

<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
    <div>
        <a>
            <p style="font-family: 'Roboto', sans-serif;font-style: italic;color:white;"> avis utilisateur n° <?php echo htmlspecialchars($row['id']); ?></p>
        </a>
    </div>
<?php endwhile; ?>