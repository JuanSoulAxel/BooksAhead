<?php
include("verifica.php");

$mensagem = $_POST['mensagem'];

$u = new Usuario(); //instanciando para pegar o nome e sobrenome para pôr no nome da foto

$u -> mandarMensagem($nomeUsuario, $sobrenomeUsuario, $telefoneUsuario, $mensagem, $imagemUsuario, $datta, $idUsuario);

echo
            "<script language='javascript' type='text/javascript'>
                window.location.href='../chat.php';
            </script>";
?> 