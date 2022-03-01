<?php include("modules/calendrier_requete_annees.php");?>

<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
    <a href="#"><?php echo htmlspecialchars($row['YEAR(date_avis)']); ?></a>
<?php endwhile; ?>