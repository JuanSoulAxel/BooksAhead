<?php
require '_conn/conexao.php'; //chamando conexão

if(isset($_SESSION['id']) && !empty($_SESSION['id']))
{
    require_once 'UsuarioClass.php'; //chamar somente uma vez o arquivo
    
    $u = new Usuario();

    $logged = $u->verificacao($_SESSION['id']); //passando id para função verificação

    $usuarioLogado = $logged['nome'];
}
else
{
    header("Location: index.php");
}

?>