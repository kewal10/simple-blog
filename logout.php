<?php
    ob_start();
    session_start();
    include 'header/head.php';
    include 'Connections/connection.php';
?>

<?php


unset($_SESSION['userID']);
session_destroy();
header('Location: index.php');
?>