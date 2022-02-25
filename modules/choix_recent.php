<?php

    session_start();
    if (isset($_SESSION['sess_choix'])) {
    $_SESSION['sess_choix'] = "recent";
    }

    header('location: ../main.php');

?>