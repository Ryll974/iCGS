<?php

    session_start();
    if (isset($_SESSION['sess_mois_num'])) {
    $_SESSION['sess_mois_num'] = 8;
    $_SESSION['sess_mois_FR'] = "Août";
    }

    header('location: http://localhost/iCGS/tech.php');

?>