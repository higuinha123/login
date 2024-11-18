<?php

$host = 'localhost'; 
$db = 'login'; 
$usuario = 'root'; 
$senha = ''; 

try {
   
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8"; 
    $opcoes = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
        PDO::ATTR_EMULATE_PREPARES => false, 
    ];

    $pdo = new PDO($dsn, $user, $pass, $opcoes);

    echo "Conexão bem-sucedida!"; 
} catch (PDOException $e) {
   
    echo 'Erro na conexão: ' . $e->getMessage();
}
?>
