<?php
require '_php/conexao.php'; //chamando conexão

if(isset($_SESSION['id']) && !empty($_SESSION['id']))
{
    require_once 'UsuarioClass.php'; //chamar somente uma vez o arquivo
    
    $u = new Usuario();

    $logged = $u->verificacao($_SESSION['id']); //passando id para função verificação

    //pegando valores do banco de dados
    $nomeUsuario = $logged['nome']; 
    $sobrenomeUsuario = $logged['sobrenome'];
    $emailUsuario = $logged['email'];
    $telefoneUsuario = $logged['telefone'];
    $imagemUsuario = $logged['imagem'];
}
else
{
    header("Location: index.php");
}
?>