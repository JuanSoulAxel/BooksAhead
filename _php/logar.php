<?php
if(isset($_POST['txtEmailEntrar']) && !empty($_POST['txtEmailEntrar']) && isset($_POST['txtSenhaEntrar']) && !empty($_POST['txtSenhaEntrar'])) //se existir e for diferente de vazio
{
    require 'conexao.php'; //chamando conexão
    require 'UsuarioClass.php'; //chamando classe usuário
    
    $u = new Usuario(); //instanciando classe usuário

    //o comando addslashes é para segurança
    $email = addslashes($_POST['txtEmailEntrar']);
    $senha = addslashes($_POST['txtSenhaEntrar']);
    
    if($u->login($email, $senha) == true)
    {
        if(isset($_SESSION['id'])) //se existir a sessão (foi criada na classe)
        {
            header("Location: ../principal.php");
        }
        else
        {
            header("Location: ../index.php");
        } 
    }
    else
    {
        header("Location: ../index.php");
    }
} 
else
{
    header("Location: ../index.php");
}
?>