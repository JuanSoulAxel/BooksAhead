<?php
require 'conexao.php';
require_once 'UsuarioClass.php'; //chamar somente uma vez o arquivo

//verificar se usuário enviou arquivo
if(isset($_FILES['arquivo3']))
{
    $u = new Usuario(); //instanciando para pegar o nome e sobrenome para pôr no nome da foto

    $logged = $u->verificacao($_SESSION['id']); //passando id para função verificação

    $nomeUsuario = $logged['nome'];
    $sobrenomeUsuario = $logged['sobrenome'];

    //strtolower = deixa tudo minúsculo
    //esse menos quatro é pra pegar os últimos quatro dígitos do nome do arquivo ex: "arquivo.jpg". Aí pegaria somente o ".jpg"
    //$extensao = strtolower(substr($_FILES['arquivo']['name'], -4 )); 

    //o novo nome vai pegar o nome e sobrenome do usuario dar um underline e pegar o id do usuário e após isso colocar a extensão
    $novo_nome = $nomeUsuario . $sobrenomeUsuario . "_capa_" . $_SESSION['id'] . '.jpg';

    //primeiro diretorio
    $diretorio0 = '../_fotos-transacao/';

    //usando para criar a pasta
    mkdir($diretorio0, 0755);

    //segundo diretorio dentro do primeiro
    $diretorio00 = $diretorio0.'capas-usuarios/';

    //usando para criar a pasta
    mkdir($diretorio00, 0755);

    //criando diretorio final
    $diretorio = $diretorio00.$_SESSION['id'].')'.'/';

    //usando para criar a pasta
    mkdir($diretorio, 0755);

    move_uploaded_file($_FILES['arquivo3']['tmp_name'], $diretorio.$novo_nome);
    
    $u->adicionarCapa($novo_nome, $_SESSION['id']);
}
else
{
    header("Location: ../perfil.php");
}
?>