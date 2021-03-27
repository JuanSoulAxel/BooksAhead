<?php
session_start();
require '_php/verifica.php'; //chamando verificacao (nao e preciso chamar conexao pq ja tem ela dentro de verificacao)

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
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@1,300&display=swap" rel="stylesheet">
   
    <link rel="icon" href="_imagens/icone-do-site.png">
    <title>Books Ahead - Leu? Troque Já!</title>
</head>
<body>
    <header class="cabecalho">
        <label id="titulo">Books Ahead</label> <!--Mostrando nome de usuário logado -->
        <nav id="menu">
            <ul>
                <li> <a href="perfil.php">Perfil</a> </li>
                <li> <a href="#doacoes">Doações</a> </li>
                <li> <a href="#">Trocas</a> </li>
                <li> <a href="#">Contato</a> </li>
            </ul>
        </nav>
        <a href="logout.php"> <img id="btnSair" src="_imagens/botao-sair.png" alt="Botão Sair"> </a>
    </header>
    <section class="corpo">
        <div id="inicio">
            <img src="_imagens/Fundo-Principal.jpg" alt="Fundo">
        </div>
        <div id="doar-trocar">
            <h1>FAÇA JÁ A SUA COLABORAÇÃO</h1>

            <p>" Livro bom é aquele que a gente passa à diante o prazer da leitura não pode ser restrito. " -Ncholas</p>

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