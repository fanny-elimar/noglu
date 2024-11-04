<?php
require_once 'pdo.php';

function verifyUserLoginPassword(PDO $pdo, string $username, string $password):array|bool
{
    $query = $pdo->prepare("SELECT * FROM user WHERE username = :username");
    $query->bindValue(":username", $username, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);
    
    if ($user && password_verify($password, $user["password"])) {
        return $user;
    } else {
        return false;
    }
}

