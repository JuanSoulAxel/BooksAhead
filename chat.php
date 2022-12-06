<?php

require '_php/verifica.php'; //chamando verificacao (nao e preciso chamar conexao pq ja tem ela dentro de verificacao)
require_once '_php/UsuarioClass.php'; //chamar somente uma vez o arquivo

//se existir e ela for diferente de vazio vai executar o código para a tela principal
if(isset($_SESSION['id']) && !empty($_SESSION['id'])): 
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
    <link rel="stylesheet" href="_modelos/style-geral.css" type="text/css"/>


    <!--Chamando fontes e o ícone do site-->
    <?php include "_modelos/fonts.php"; ?>

    <title>Books Ahead - Acesse já!</title>


    <script type="text/javascript">  

        /*essa função, através do document.getElementById, vai pegar e mostrar
        o chat (chat.php), vai carregar e vai mandar pra dentro da div, atualizando
        sempre que chegar mensagem nova*/
       function ajax() {
       var req = new XMLHttpRequest();
        req.onreadystatechange = function(){
            if (req.readyState == 4 && req.status == 200) {
                document.getElementById('baloesdeconversa').innerHTML = req.responseText;
            }
        } 
        req.open('GET', '_php/chat-select-db.php', true);
        req.send();
    }
    
    setInterval(function(){ajax();}, 1000)
    </script>

</head>
<body>
    
    <?php  include "_modelos/header.php"; ?>
    
    <h2 id="tituloChat">CHAT</h2>

    <?php  include "_modelos/aside.php"; ?>

    <section id="blocoConversa">
    
        <div id="p1-blocoConversa">
            <label id="chatGeral">CHAT GERAL</label>
        </div>

        <div id="baloesdeconversa">

        </div>

        <div id="p3-blocoConversa">
            <img id="emoticonMensagens" src="_imagens/emoticon-mensagens.png" alt="Emoticon Mensagens">
            <img id="anexoMensagens" src="_imagens/anexo-mensagens.png" alt="Emoticon Mensagens">

            <form method="POST" action="_php/chat-post-mensagem.php">
              <input type="text" id="mensagem" name="mensagem" placeholder="mensagem" required>
              <input type="submit" id="botaoMensagem"  name="botaoMensagem" value="enviar">
            </form>
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