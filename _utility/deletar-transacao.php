<?php
include_once("conexao.php");

    $sql = "DELETE FROM transacao WHERE id='" . $_GET["id"] . "'"; //Pegando id por GET que está sendo enviado pelo botão interacaoDeletar de _utility/listar-transacoes.php para _modelos/conf-del-post.php e mandando pra cá
    $sql = $pdo->prepare($sql);


    if($sql->execute())
    {
        echo
            "<script language='javascript' type='text/javascript'>
                alert('Postagem deletada!'); 
                window.location.href='../perfil.php';
            </script>";
    }
    else
    {
        echo
            "<script language='javascript' type='text/javascript'>
                alert('Ops! Parece que deu algum erro!'); 
                window.location.href='../perfil.php';
            </script>";
    }
?>