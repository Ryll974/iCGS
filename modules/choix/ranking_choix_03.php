<?php

    session_start();
    if (isset($_SESSION['sess_mois_num'])) {
    $_SESSION['sess_mois_num'] = 3;
    $_SESSION['sess_mois_FR'] = "Mars";
    }

    header('location: http://localhost/iCGS/ranking.php');

?>