<?php

    session_start();
    if (isset($_SESSION['sess_mois_num'])) {
    $_SESSION['sess_mois_num'] = 9;
    $_SESSION['sess_mois_FR'] = "Septembre";
    }

    header('location: http://localhost/iCGS/tech.php');

?>