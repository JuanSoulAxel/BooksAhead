<?php
require 'conexao.php'; //chamando conexão

if(isset($_SESSION['id']) && !empty($_SESSION['id']))
{
    require_once 'UsuarioClass.php'; //chamar somente uma vez o arquivo
    
    $u = new Usuario();

    $logged = $u->verificacao($_SESSION['id']); //passando id para função verificação

    //pegando valores do banco de dados
    $idUsuario = $_SESSION['id'];
    $nomeUsuario = $logged['nome']; 
    $sobrenomeUsuario = $logged['sobrenome'];
    $emailUsuario = $logged['email'];
    $telefoneUsuario = $logged['telefone'];
    $imagemUsuario = $logged['imagem'];
    $capaUsuario = $logged['capa'];  

    if($imagemUsuario == null) //As linhas abaixo irão verificar se o usuário tem foto cadastrada
    {
        $imagemUsuario = "_imagens/USER_PADRAO/Foto-Usuario.png";
    } 
    else 
    {
        $imagemUsuario = "_fotos-transacao/fotos-usuarios/".$_SESSION['id'].')'.'/'.$logged['imagem'];
    }

    if($capaUsuario == null) //Se não tiver fotos cadastradas vai substituir por uma padrão do site
    {
        $capaUsuario = "_imagens/USER_PADRAO/Fundo-Principal.jpg";
    }
    else
    {
        $capaUsuario = "_fotos-transacao/capas-usuarios/".$_SESSION['id'].')'.'/'.$logged['capa'];
    }
}
else
{
    header("Location: index.php");
}
?>