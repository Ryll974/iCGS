<?php

    session_start();
    if (isset($_SESSION['sess_choix'])) {
    $_SESSION['sess_choix'] = "negative";
    }

    header('location: ../main.php');

?>