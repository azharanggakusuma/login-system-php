<?php
    session_start();

    session_unset();
    session_destroy();
    unset($_SESSION["login"]);
    unset($_SESSION["name"]);
    $_SESSION = [];

    header ("Location:login.php");
    exit;
?>