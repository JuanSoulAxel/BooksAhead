<?php
session_start(); //iniciar sessão
include_once 'conexao.php'; //incluir somente uma vez o arquivo conexão

//Verificar se o usuário clicou no botão vai acessar o if caso contrário acessa o else
$SendCadCont = filter_input(INPUT_POST, 'SendCadCont', FILTER_SANTIZE_STRING);

if($SendCadCont)
{

}
else
{
    $_SESSION['msg'] = '<p> Mensagem não enviada </p>'; //criando variável global
    header('Location: index.html');
}
?>