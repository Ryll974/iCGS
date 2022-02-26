<?php

    session_start();
    if (isset($_SESSION['sess_mois_num'])) {
    $_SESSION['sess_mois_num'] = 7;
    $_SESSION['sess_mois_FR'] = "Juillet";
    }

    header('location: http://localhost/iCGS/tech.php');

?>