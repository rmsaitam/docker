<?php
 
try {
    $conn = new PDO("mysql:host=db;dbname=exemplo", "user", "user");
    echo "Conectado no banco de dados exemplo no SGBD MySQL com sucesso.";
} catch (PDOException $pe) {
    die("Não pode conectar no banco de dados exemplo :" . $pe->getMessage());
}