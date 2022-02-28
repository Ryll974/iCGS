<?php

    session_start();
    if (isset($_SESSION['sess_mois_num'])) {
    $_SESSION['sess_mois_num'] = 12;
    $_SESSION['sess_mois_FR'] = "Décembre";
    }

    header('location: http://localhost/iCGS/ranking.php');

?>