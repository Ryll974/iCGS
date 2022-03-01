<?php

  if ($satisfaction_mois_q1 >= 85) {
    $label_q1 = "satisfait";
  } elseif ($satisfaction_mois_q1 >= 50) {
    $label_q1 = "neutre";
  } else {
    $label_q1 = "insatisfait";
  }

  if ($satisfaction_mois_q2 >= 85) {
    $label_q2 = "satisfait";
  } elseif ($satisfaction_mois_q2 >= 50) {
    $label_q2 = "neutre";
  } else {
    $label_q2 = "insatisfait";
  }

  if ($satisfaction_mois_q3 >= 85) {
    $label_q3 = "satisfait";
  } elseif ($satisfaction_mois_q3 >= 50) {
    $label_q3 = "neutre";
  } else {
    $label_q3 = "insatisfait";
  }

  if ($satisfaction_mois_q4 >= 85) {
    $label_q4 = "satisfait";
  } elseif ($satisfaction_mois_q4 >= 50) {
    $label_q4 = "neutre";
  } else {
    $label_q4 = "insatisfait";
  }

?>

<table>
  <tr>
    <td><img src="ressources/main/q1-<?php echo $label_q1; ?>.png" width="64" height="64" alt="q1"></td>
    <td><h3 style="font-family: 'Roboto', sans-serif;font-style: italic;color:white;">   ► <?php echo htmlspecialchars($satisfaction_mois_q1); ?>%</h3></td>
  </tr>
  <tr>
    <td><img src="ressources/main/q2-<?php echo $label_q2; ?>.png" width="64" height="64" alt="q2"></td>
    <td><h3 style="font-family: 'Roboto', sans-serif;font-style: italic;color:white;">   ► <?php echo htmlspecialchars($satisfaction_mois_q2); ?>%</h3></td>
  </tr>
  <tr>
    <td><img src="ressources/main/q3-<?php echo $label_q3; ?>.png" width="64" height="64" alt="q3"></td>
    <td><h3 style="font-family: 'Roboto', sans-serif;font-style: italic;color:white;">   ► <?php echo htmlspecialchars($satisfaction_mois_q3); ?>%</h3></td>
  </tr>
  <tr>
    <td><img src="ressources/main/q4-<?php echo $label_q4; ?>.png" width="64" height="64" alt="q4"></td>
    <td><h3 style="font-family: 'Roboto', sans-serif;font-style: italic;color:white;">   ► <?php echo htmlspecialchars($satisfaction_mois_q4); ?>%</h3></td>
  </tr>
</table>