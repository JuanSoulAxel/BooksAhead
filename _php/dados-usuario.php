<?php
require 'conexao.php'; //chamando conexão
require 'UsuarioClass.php';

$nome = addslashes($_POST['txtAtualizarNome']);
$sobrenome = addslashes($_POST['txtAtualizarSobrenome']);
$email = addslashes($_POST['txtAtualizarEmail']);
$telefone = addslashes($_POST['txtAtualizarTelefone']);

$u = new Usuario;

$u->atualizarDados($nome, $sobrenome, $email, $telefone, $_SESSION['id']);
?>