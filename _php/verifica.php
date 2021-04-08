<?php
require '_php/conexao.php'; //chamando conexão

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

    //As linhas abaixo irão verificar se o usuário tem foto cadastrada
    if($imagemUsuario == null) 
    {
        $imagemUsuario = "_imagens/USER_PADRAO/Foto-Usuario.png";
    } 
    else 
    {
        $imagemUsuario = "_fotos-usuarios/". $logged['imagem'];
    }
    //Se não tiver fotos cadastradas vai substituir por uma padrão do site
    if($capaUsuario == null)
    {
        $capaUsuario = "_imagens/USER_PADRAO/Fundo-Principal.jpg";
    }
    else
    {
        $capaUsuario = "_capas-usuarios/".$logged['capa'];    
    }
}
else
{
    header("Location: index.php");
}
?>