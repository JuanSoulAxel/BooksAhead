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
<<<<<<< HEAD
    $capaUsuario = $logged['capa'];  
=======
    $capaUsuario = $logged['capa'];    
>>>>>>> 0dd3e75e09e30a497b8da83755bbd2289863fb3f

    //As linhas abaixo irão verificar se o usuário tem foto cadastrada
    if($imagemUsuario == null) 
    {
        $imagemUsuario = "_imagens/USER_PADRAO/Foto-Usuario.png";
    } 
    else 
    {
        $imagemUsuario = "_fotos-transacao/fotos-usuarios/".$_SESSION['id'].')'.$nomeUsuario.'/'.$logged['imagem'];
    }
    //Se não tiver fotos cadastradas vai substituir por uma padrão do site
    if($capaUsuario == null)
    {
        $capaUsuario = "_imagens/USER_PADRAO/Fundo-Principal.jpg";
    }
    else
    {
        $capaUsuario = "_fotos-transacao/capas-usuarios/".$_SESSION['id'].')'.$nomeUsuario.'/'.$logged['capa'];
  
    }
<<<<<<< HEAD


=======
>>>>>>> 0dd3e75e09e30a497b8da83755bbd2289863fb3f
}
else
{
    header("Location: index.php");
}
?>