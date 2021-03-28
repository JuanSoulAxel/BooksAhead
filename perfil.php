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
    <!--Esse fundo vai deixar a tela mais escura #gambiarra-->
    <div class="telaFundo"> </div>

    <!--Criando form para fazer upload de fotos-->
    <form class="cadastrarImagem" method="POST" action="foto-usuario.php" enctype="multipart/form-data"> <!--O enctype avisa pro sistema que um arquivo está sendo enviado-->
        <a id="btnFechar"> <i class="fa fa-times"></i> </a> <br>
        <p>Escolha a sua nova foto de perfil</p> <br>
        <img src="_imagens/icone-atualizar-imagem.png" alt="Icone Atualizar"> <br> <br> <br>
        <input type="file" name="arquivo" id="escolherArquivo" required> <br> <br>
        <input name="enviarArquivo" id="enviarArquivo" type="submit" value="Salvar">
    </form>
    


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
        <p id="mensagemInicial">Esse é seu perfil e você pode editá-lo como desejar.</p>

        <div id="transacoes">
            <img src="_imagens/suas-doacoes.png" alt="Suas Doações">
            <img src="_imagens/suas-trocas.png" alt="Suas Trocas">
            <img src="_imagens/seus-desejados.png" alt="Seus Desejados">
        </div>   <br> <br> <br> <br>

        <div id="perfil">
            <!--No img abaixo eu coloquei o diretório onde fica armazenado as fotos que os usuários cadastram, e após isso peguei com o php (verifica.php) a variável onde contém o nome do arquivo-->
            <img id="imagemUsuario" src="_fotos-usuarios/<?php echo $imagemUsuario;?>" alt="Foto do Usuário"> <br> <br>
            <label id="nomeUsuario"> <?php echo $nomeUsuario ." ". $sobrenomeUsuario ?> </label>
            <label> <?php echo $emailUsuario ?> </label>
            <label> <?php echo $telefoneUsuario ?> </label> <br> <br> <br> <br> <br>
        </div>
    </section>

    <!--biblioteca geral do JQUERY--> 
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

    <!--Chamando _javascript-->
    <script src="_javascript/script-perfil.js"> </script>
</body>
</html>

<?php 
//Senão, vai mandar novamente para a tela index
else: 
header("Location: index.php"); 
endif; 
?>