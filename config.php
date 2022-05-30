<?php

$host = "127.0.0.1";
$db="trabalho";
$user= "root";
$senha= "";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $error){
    echo "Erro ao conectar ao banco $error";
}

?>