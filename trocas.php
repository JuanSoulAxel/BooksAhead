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

    <link rel="stylesheet" href="_css/style-trocas.css">
    <link rel="stylesheet" href="_modelos/style-geral.css">

    <!--Chamando fontes e o ícone do site-->
    <?php include "_modelos/fonts.php"; ?>

    <title>Books Ahead - Trocas</title>
</head>
<body>
    <!--Chamando cabecalho do site-->
    <?php include "_modelos/header.php"; ?> 

    <h2 id="tituloTrocas">TROCAS</h2>

    <!--Chamando lateral do site-->
    <?php include "_modelos/aside.php"; ?>

    <br> <br> <br> <br> <br>
    <section class="corpo">
        <form class="cadastrarLivro" method="POST" action="foto-livro-trocar.php" enctype="multipart/form-data"> <!--O enctype avisa pro sistema que um arquivo está sendo enviado-->
            <div id="postagem-parte1">
                <img id="imagemUsuario" src="<?php echo $imagemUsuario;?>" alt="Foto do Usuário">
                <input name="txtComentario" type="text" placeholder="Poste aqui o livro para trocar">
                <button id="btnPostar" type="submit">POSTAR</button>
            </div> <br>

            <p id="bordaCorpo"> </p> <br> <br>

            <div id="postagem-parte2">
                <input type="file" name="livro" id="escolherLivro" required> <br> <br>
            </div>
        </form>
    </section> <br> <br>

    <!--Essa variável trocas vai verificar qual a página para listar corretamente as transações-->
    <?php $pagina="trocas"; include "_php/listar-transacoes.php"; ?>

    <!--Chamando footer-->
    <?php include "_modelos/footer.php"; ?>
</body>
</html>

<?php 
//Senão, vai mandar novamente para a tela index
else: 
header("Location: index.php"); 
endif; 
?>