<?php
session_start();

require '_php/verifica.php'; //chamando verificacao (nao e preciso chamar conexao pq ja tem ela dentro de verificacao)
require_once '_php/UsuarioClass.php'; //chamar somente uma vez o arquivo

//se existir e ela for diferente de vazio vai executar o código para a tela principal
if(isset($_SESSION['id']) && !empty($_SESSION['id'])): 
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="_css/style-perfil.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@1,300&display=swap" rel="stylesheet">

    <title>Books Ahead - Seu Perfil</title>
</head>
<body>
    <header class="cabecalho">
        <label id="titulo"> <a href="principal.php">Books Ahead</a> </label> <!--Mostrando nome de usuário logado -->
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
        <p id="nomeUsuario">Seja bem vindo, <?php echo $usuarioLogado?>! <br> Esse é seu perfil e você pode editá-lo como desejar.</p>

        <div id="transacoes">
            <img src="_imagens/suas-doacoes.png" alt="Suas Doações">
            <img src="_imagens/suas-trocas.png" alt="Suas Trocas">
            <img src="_imagens/seus-desejados.png" alt="Seus Desejados">
        </div>   <br> <br> <br> <br>
        
        <h1>Cadastrar Imagem</h1>

        <!--Criando form para fazer upload de fotos-->
        <form method="POST" action="upload.php" enctype="multipart/form-data"> <!--O enctype avisa pro sistema que um arquivo está sendo enviado-->
            <input type="file" name="arquivo" required>
            <input name="enviarArquivo" type="submit" value="Salvar">
        </form>
    </section>
</body>
</html>

<?php 
//Senão, vai mandar novamente para a tela index
else: 
header("Location: index.php"); 
endif; 
?>