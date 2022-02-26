<?php

    session_start();
    if (isset($_SESSION['sess_mois_num'])) {
    $_SESSION['sess_mois_num'] = 10;
    $_SESSION['sess_mois_FR'] = "Octobre";
    }

    header('location: http://localhost/iCGS/tech.php');

?>