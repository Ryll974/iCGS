<?php

    session_start();
    if (isset($_SESSION['sess_choix'])) {
    $_SESSION['sess_choix'] = "positive";
    }

    header('location: ../main.php');

?>