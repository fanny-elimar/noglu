<?php

session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    'domain' => '',
    'httponly' => true
]);

session_start();



function userOnly() {
    if (!isset($_SESSION['user'])) {
        // Rediriger vers la page de connexion
        header("Location: ../login.php");
        exit();
    }
}