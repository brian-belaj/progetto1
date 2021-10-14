<?php
    $hostname ="mysql";
    $database_name ="demo";
    $user ="root";
    $pw ="password";

    try{
        $pdo = new PDO("mysql:host=$hostname;dbname=$database_name", $user, $pw);
    } catch {
        
    }
?>