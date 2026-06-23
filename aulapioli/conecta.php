<?php
    $host = "localhost";
    $db_name = "pioli";
    $user = "root";
    $pass = "";
    $charset = "utf8mb4";
    $dsn = "mysql:host=$host;db_name;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    try {
    $pdo = new PDO($dsn, $user, $pass, $options);
   // echo "Conectando!";
    } catch (PDOException $e) {
        exit("Erro:". $e->GetMessage());
    }
?>