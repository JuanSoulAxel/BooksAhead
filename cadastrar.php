<?php
require '_conn/conexao.php'; //chamando conexão
require 'UsuarioClass.php'; //chamando classe usuário

$nome = $_POST['txtNome'];
$sobrenome = $_POST['txtSobrenome'];
$email = $_POST['txtEmail'];
$telefone = $_POST['txtTelefone'];
$senha = $_POST['txtSenha'];
$sexo = $_POST['slcSexo'];

$u = new Usuario(); //instanciando classe usuário

$u->cadastro($nome, $sobrenome, $email, $telefone, $senha, $sexo);

echo //abrindo com javascript em PHP!!!! 
"<script language='javascript' type='text/javascript'>
    alert('Usuário Cadastrado com sucesso'); 
    window.location.href='index.php';
</script>";
?>