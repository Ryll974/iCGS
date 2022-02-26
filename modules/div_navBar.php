<?php
  if ($satisfaction_mois >= 85) {
    $navBar_color = "navBarGreen";
  } elseif ($satisfaction_mois >= 50) {
    $navBar_color = "navBarOrange";
  } else {
    $navBar_color = "navBarRed";
  }
?>

<div id="<?php echo $navBar_color; ?>" class="container-fluid">