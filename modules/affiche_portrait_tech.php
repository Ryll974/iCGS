<?php

  if ($satisfaction_mois >= 85) {
    $circle_border = "circleBorderGreen";
  } elseif ($satisfaction_mois >= 50) {
    $circle_border = "circleBorderOrange";
  } else {
    $circle_border = "circleBorderRed";
  }
?>

<div id="<?php echo $circle_border; ?>" class="container-fluid tech">
  <div class="container align-middle">
    <img src="http://localhost/iCGS/ressources/images/Techs/<?php echo htmlspecialchars($id); ?>.png" width="128" height="128" alt="<?php echo htmlspecialchars($row['identifiant']); ?>" />
</div>
</div>