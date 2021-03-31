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
    <link rel="stylesheet" href="_modelos/style-geral.css">

    <!--Chamando fontes e o ícone do site-->
    <?php include "_modelos/fonts.php"; ?>
    
    <title>Books Ahead - Leu? Troque Já!</title>
</head>
<body>
    
    <!--Chamando o header-->
    <?php  include "_modelos/header.php"; ?> <br> <br> <br> <br>

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

    <!--Chamando Footer-->
    <?php include "_modelos/footer.php"; ?>
</body>
</html>

<?php 
//Senão, vai mandar novamente para a tela index
else: 
header("Location: index.php"); 
endif; 
?>