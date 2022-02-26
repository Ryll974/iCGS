<?php

    session_start();
    if (isset($_SESSION['sess_mois_num'])) {
    $_SESSION['sess_mois_num'] = 2;
    $_SESSION['sess_mois_FR'] = "Février";
    }

    header('location: http://localhost/iCGS/main.php');

?>