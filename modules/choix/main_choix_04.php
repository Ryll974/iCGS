<?php

    session_start();
    if (isset($_SESSION['sess_mois_num'])) {
    $_SESSION['sess_mois_num'] = 4;
    $_SESSION['sess_mois_FR'] = "Avril";
    }

    header('location: http://localhost/iCGS/main.php');

?>