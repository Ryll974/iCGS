<?php

    session_start();
    if (isset($_SESSION['sess_choix'])) {
    $_SESSION['sess_choix'] = "random";
    }

    header('location: http://localhost/iCGS/main.php');

?>