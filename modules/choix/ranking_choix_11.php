<?php

    session_start();
    if (isset($_SESSION['sess_mois_num'])) {
    $_SESSION['sess_mois_num'] = 11;
    $_SESSION['sess_mois_FR'] = "Novembre";
    }

    header('location: http://localhost/iCGS/ranking.php');

?>