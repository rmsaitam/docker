<?php 
$dsn = "pgsql:host= db;port=5432;dbname=exemplo;user=user;password=user";

try{
 $conn = new PDO($dsn);
 
 if($conn){
   echo "Conectado no banco de dados exemplo no SGBD PostgreSQL com sucesso.";
 }
}catch (PDOException $e){
 
 echo $e->getMessage();
}
