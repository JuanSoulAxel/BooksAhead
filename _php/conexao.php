<?php

session_start();

//criando variáveis e atribuindo os valores
$localhost = "127.0.0.1";
$user = "root";
$pass = "1070";
$banco = "booksahead";

global $pdo; //criando variável global

try {
    $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}
?>