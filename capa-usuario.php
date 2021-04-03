<?php
require '_php/conexao.php';
require_once '_php/UsuarioClass.php'; //chamar somente uma vez o arquivo

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

    //é para onde o nosso upload vai ser feito
    $diretorio = '_capas-usuarios/';

    //usando para criar a pasta
    mkdir($diretorio, 0755);

    move_uploaded_file($_FILES['arquivo3']['tmp_name'], $diretorio.$novo_nome);
    
    $u->adicionarCapa($novo_nome, $_SESSION['id']);
}
else
{
    header("Location: perfil.php");
}
?>