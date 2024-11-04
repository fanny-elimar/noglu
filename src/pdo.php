<?php

$db_host = getenv('DB_HOST');
$db_name = getenv('DB_NAME');
$db_user = getenv('DB_USER');
$db_pass = getenv('DB_PASS');

// Read the password file path from an environment variable
//$password_file_path = getenv('PASSWORD_FILE_PATH');

// Read the password from the file
//$db_pass = trim(file_get_contents($password_file_path));


    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8",$db_user,$db_pass);
