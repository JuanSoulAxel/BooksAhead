<?php
require 'UsuarioClass.php';
require 'verifica.php';

$senhaAtual = addslashes($_POST['senhaAtual']);
$novaSenha = addslashes($_POST['novaSenha']);
$confirmarNovaSenha = addslashes($_POST['confirmarNovaSenha']);


$u = new Usuario;

$u->alterarSenha($senhaAtual, $novaSenha, $confirmarNovaSenha, $_SESSION['id']);
?>