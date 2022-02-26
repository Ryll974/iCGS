<?php
  if ($satisfaction_mois >= 85) {
    $circle_border = "circleBorderGreen";
  } elseif ($satisfaction_mois >= 50) {
    $circle_border = "circleBorderOrange";
  } else {
    $circle_border = "circleBorderRed";
  }
?>

<div id="<?php echo $circle_border; ?>" class="container-fluid">
  <span id="percentageScore" class="container align-middle">
    <?php echo $satisfaction_mois; ?>
  </span>
</div>