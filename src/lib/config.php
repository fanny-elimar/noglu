<?php

$password_file_path = getenv('PASSWORD_FILE_PATH');


    $hostname = getenv('DB_HOST');
    $username = getenv('DB_USER');
    $password = trim(file_get_contents($password_file_path));
    $database = getenv('DB_NAME');

define('DB_NAME',$database);
define('DB_HOST',$hostname);
define('DB_USER',$username);
define('DB_PASSWORD',$password);
