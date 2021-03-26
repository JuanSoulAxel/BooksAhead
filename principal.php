<?php
session_start();
require '_conn/conexao.php'; //chamando conexão

//se existir e ela for diferente de vazio vai executar o código para a tela principal
if(isset($_SESSION['id']) && !empty($_SESSION['id'])): 
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="_css/style-principal.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
   
    <link rel="icon" href="_imagens/icone-do-site.png">
    <title>Books Ahead - Leu? Troque Já!</title>
</head>
<body>
    <header class="cabecalho">
        <img src="_imagens/icone-usuario.png" alt="Icone do Usuário" id="iconeUsuario">
        <nav id="menu">
            <ul>
                <li> <a href="#inicio">Inicio</a> </li>
                <li> <a href="#doacoes">Doações</a> </li>
                <li> <a href="#">Trocas</a> </li>
                <li> <a href="#">Contato</a> </li>
            </ul>
        </nav>
        
        <a href="logout.php"><button type="submit" id="btnSair">Sair</button></a>
    </header>
    <section class="corpo">
        <div id="inicio">
            <img src="_imagens/Fundo-Principal.jpg" alt="Fundo">
        </div>
        <div id="doar-trocar">
            <h1>FAÇA JÁ A SUA COLABORAÇÃO</h1>
            <img src="_imagens/icone-doar.png" alt="Imagem Doar" id="imgDoar">
            <img src="_imagens/icone-trocar.png" alt="Imagem Trocar" id="imgTrocar">
        </div>
    </section>
</body>
</html>


<?php 
//Senão, vai mandar novamente para a tela index
else: 
header("Location: index.php"); 
endif; 
?>