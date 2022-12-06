<?php

session_start(); //iniciando sessão

//criando variáveis e atribuindo os valores
$localhost = "127.0.0.1";
<<<<<<< HEAD
$user = "root";
$pass = "1070";
=======
$user = "juan";
$pass = "123";
>>>>>>> 0dd3e75e09e30a497b8da83755bbd2289863fb3f
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