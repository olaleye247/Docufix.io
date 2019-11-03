<?php
    session_start();
    session_destroy();
    // Redirects you to the login page:
    header('Location: login.php');
?>