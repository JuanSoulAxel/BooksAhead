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
    <link rel="stylesheet" href="_modelos/style-geral.css">

    <!--Chamando fontes e o ícone do site-->
    <?php include "_modelos/fonts.php"; ?>

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

    <!--Chamando o header-->
    <?php  include "_modelos/header.php"; ?>

    <section class="corpo">
        <div id="transacoes">
            <img id="suasDoacoes" src="_imagens/suas-doacoes.png" alt="Suas Doações">
            <img id="suasTrocas" src="_imagens/suas-trocas.png" alt="Suas Trocas">
            <img id="seusDesejados" src="_imagens/seus-desejados.png" alt="Seus Desejados">
        </div>   <br> <br> <br> <br>

        <div id="perfil">
            <!--No img abaixo eu coloquei o diretório onde fica armazenado as fotos que os usuários cadastram, e após isso peguei com o php (verifica.php) a variável onde contém o nome do arquivo-->
            <img id="imagemUsuario" src="_fotos-usuarios/<?php echo $imagemUsuario;?>" alt="Foto do Usuário"> <br> <br>
            <label id="nomeUsuario"> <?php echo $nomeUsuario ." ". $sobrenomeUsuario ?> </label>
            <label> <?php echo $emailUsuario ?> </label>
            <label> <?php echo $telefoneUsuario ?> </label> <br> <br> <br> <br> <br>
        </div>
    </section>

    <!--Chamando Footer-->
    <?php include "_modelos/footer.php"; ?>

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