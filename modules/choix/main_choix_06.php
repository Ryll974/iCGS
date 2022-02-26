<?php

    session_start();
    if (isset($_SESSION['sess_mois_num'])) {
    $_SESSION['sess_mois_num'] = 6;
    $_SESSION['sess_mois_FR'] = "Juin";
    }

    header('location: http://localhost/iCGS/main.php');

?>