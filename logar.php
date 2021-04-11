<?php
if(isset($_POST['txtEmailEntrar']) && !empty($_POST['txtEmailEntrar']) && isset($_POST['txtSenhaEntrar']) && !empty($_POST['txtSenhaEntrar'])) //se existir e for diferente de vazio
{
    require '_php/conexao.php'; //chamando conexão
    require '_php/UsuarioClass.php'; //chamando classe usuário
    
    $u = new Usuario(); //instanciando classe usuário

    //o comando addslashes é para segurança
    $email = addslashes($_POST['txtEmailEntrar']);
    $senha = addslashes($_POST['txtSenhaEntrar']);
    
    if($u->login($email, $senha) == true)
    {
        if(isset($_SESSION['id'])) //se existir a sessão (foi criada na classe)
        {
            header("Location: principal.php");
        }
        else
        {
            header("Location: index.php");
        } 
    }
    else
    {
        echo
        "<script language='javascript' type='text/javascript'>
            alert('Email ou senha inválido'); 
            window.location.href='index.php';
        </script>";
    }
} 
else
{
    header("Location: index.php");
}
?>