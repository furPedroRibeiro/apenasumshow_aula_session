<?php
    $db = "bd_aula";
    $host = "localhost";
    $user = "root";
    $pass = "";
    
    $dns = "mysql:host=".$host."; dbname=".$db;
    $pdo = new PDO($dns, $user, $pass);
?>