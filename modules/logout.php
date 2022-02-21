<?php
session_start();
$_SESSION['sess_id'] = "";
$_SESSION['sess_nom'] = "";
$_SESSION['sess_prenom'] = "";
$_SESSION['sess_email'] = "";

if(empty($_SESSION['sess_id'])) header("location: ../index.php");

?>