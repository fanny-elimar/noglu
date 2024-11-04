<?php

$db_host = 'klbcedmmqp7w17ik.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$db_name = 'tvk9yju0k1g59m0n';
$db_user = 'myxgwrd6h4msa70v';
$db_pass = 'agfvorpz68z6gmy5';

// Read the password file path from an environment variable
//$password_file_path = getenv('PASSWORD_FILE_PATH');

// Read the password from the file
//$db_pass = trim(file_get_contents($password_file_path));


    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8",$db_user,$db_pass);
