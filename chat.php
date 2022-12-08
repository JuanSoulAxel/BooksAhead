<?php
require '_utility/verifica.php'; //chamando verificacao (nao e preciso chamar conexao pq ja tem ela dentro de verificacao)
require_once '_utility/UsuarioClass.php'; //chamar somente uma vez o arquivo

if(isset($_SESSION['id']) && !empty($_SESSION['id'])): //se existir e ela for diferente de vazio vai executar o código para a tela principal
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site para estimular a troca ou doação de livros já usufruído pelo leitor">
    <meta name="keywords" content="Livros, Quadrinhos, Revistas, Troca, Doação, Leitor">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Juan Axel">

    <link rel="stylesheet" href="_css/style-chat.css" type="text/css"/>
    <link rel="stylesheet" href="_css/style-geral.css" type="text/css"/>

    <?php include "_modelos/fonts.php"; ?> <!--Chamando fontes e o ícone do site-->

    <title>Books Ahead - Acesse já!</title>

</head>
<body>
    
    <?php  include "_modelos/header.php"; ?>
    
    <h2 id="tituloChat">CHAT</h2>

    <?php  include "_modelos/aside.php"; ?>

    <section id="blocoConversa">
    
        <div id="blocoConversa-parte1">
            <img id="chatGeral-icone" src="_imagens/chat-geral-icone.png" alt="Icone do Chat">
            <label id="chatGeral-titulo">Chat Geral</label>
        </div>

        <div id="blocoConversa-parte2"> </div>

        <div id="blocoConversa-parte3">
            <img id="emoticonMensagens" src="_imagens/emoticon-mensagens.png" alt="Emoticon Mensagens">
            <img id="anexoMensagens" src="_imagens/anexo-mensagens.png" alt="Emoticon Mensagens">

            <form method="POST" action="_utility/chat-post-mensagem.php">
              <input type="text" id="mensagem" name="mensagem" placeholder="mensagem" required>
              <input type="submit" id="botaoMensagem"  name="botaoMensagem" value="enviar">
            </form>
        </div>
    </section>


    <script src="_javascript/script-chat.js"> </script> <!--Chamando _javascript-->

</body>
</html>

<?php 
else: //Senão, vai mandar novamente para a tela index
header("Location: index.php"); 
endif; 
?>