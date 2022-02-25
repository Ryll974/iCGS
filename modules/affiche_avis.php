<?php 
    include("modules/connexiondb.php");
    include("modules/requete_affiche_avis.php");
?>

<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>

    <div class="avisClients">
        <table>
            <tr>
                <td>
                    <img src="ressources/main/<?php echo htmlspecialchars($row['ng']); ?>-Stars.png" alt="étoiles">
                </td>
                <td>
                    <p> -- <?php echo $choix_avis; ?> -- <?php echo htmlspecialchars($row['date_avis']); ?> -- <?php echo htmlspecialchars($row['avis']); ?></p>
                </td>
            </tr>
        </table>
    </div>

<?php endwhile; ?>