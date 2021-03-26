<?php
session_start();

unset($_SESSION['id']); //esse comando serve para matar a sessão que criamos lá na classe usuário

echo 
    "<script language='javascript' type='text/javascript'>
        alert('Obrigado por acessar. Até mais!'); 
        window.location.href='index.php';
    </script>";
?>