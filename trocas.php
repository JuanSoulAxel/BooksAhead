<?php
require '_utility/verifica.php'; //chamando verificacao (nao e preciso chamar conexao pq ja tem ela dentro de verificacao)
require_once '_utility/UsuarioClass.php'; //chamar somente uma vez o arquivo

if(isset($_SESSION['id']) && !empty($_SESSION['id'])): //se existir e ela for diferente de vazio vai executar o código para a tela principal
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="_css/style-doacoes-e-trocas.css">
    <link rel="stylesheet" href="_css/style-geral.css">

    <?php include "_modelos/fonts.php"; ?> <!--Chamando fontes e o ícone do site-->

    <title>Books Ahead - Trocas</title>
</head>
<body>
    <?php include "_modelos/header.php"; ?> <!--Chamando cabecalho do site-->

    <h2 id="tituloTrocas">TROCAS</h2>

    <?php include "_modelos/aside.php"; ?> <!--Chamando lateral do site-->

    <aside class="lateralDireita">
        <img id="removerMarginTop" src="_imagens/trocar-coracao.png" alt="Coração Trocar 1"> <br>
        <img src="_imagens/trocar-coracao2.png" alt="Coração Trocar 2"> <br>
    </aside> 

    <br> <br> <br> <br> <br>
    <section class="corpo">

        <form class="cadastrarLivro" method="POST" action="_utility/foto-livro-trocar.php" enctype="multipart/form-data"> <!--O enctype avisa pro sistema que um arquivo está sendo enviado-->

            <div id="postagem-parte1">
                <img id="imagemUsuario-postagem" src="<?php echo $imagemUsuario;?>" alt="Foto do Usuário">
                <input name="txtComentario" type="text" placeholder="Poste aqui o livro para trocar">
                <button id="btnPostar-postagem" type="submit">POSTAR</button>
            </div> <br>

            <p id="bordaCorpo"> </p> <br> <br>

            <div id="postagem-parte2">
                <input type="file" name="livro" id="escolherLivro" required> <br> <br>
            </div>
        </form>
    </section> <br> <br>

    <?php $pagina="trocas"; include "_utility/listar-transacoes.php"; ?> <!--Essa variável página vai verificar qual a página para listar corretamente as transações-->

    <?php include "_modelos/footer.php"; ?> <!--Chamando footer-->
</body>
</html>

<?php 
else: //Senão, vai mandar novamente para a tela index
header("Location: index.php"); 
endif; 
?>