<?php

    session_start();
    if (isset($_SESSION['sess_mois_num'])) {
    $_SESSION['sess_mois_num'] = 1;
    $_SESSION['sess_mois_FR'] = "Janvier";
    }

    header('location: http://localhost/iCGS/main.php');

?>