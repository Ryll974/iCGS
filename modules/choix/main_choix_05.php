<?php

    session_start();
    if (isset($_SESSION['sess_mois_num'])) {
    $_SESSION['sess_mois_num'] = 5;
    $_SESSION['sess_mois_FR'] = "Mai";
    }

    header('location: http://localhost/iCGS/main.php');

?>