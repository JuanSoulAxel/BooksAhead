<?php
require '_utility/verifica.php'; //chamando verificacao (nao e preciso chamar conexao pq ja tem ela dentro de verificacao)

if(isset($_SESSION['id']) && !empty($_SESSION['id'])): //se existir e ela for diferente de vazio vai executar o código para a tela principal
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="_css/style-principal.css">
    <link rel="stylesheet" href="_css/style-geral.css">

    <?php include "_modelos/fonts.php"; ?> <!--Chamando fontes e o ícone do site-->
    
    <title>Books Ahead - Leu? Troque Já!</title>
</head>
<body>
    
    <?php  include "_modelos/header.php"; ?> <!--Chamando o header-->

    <h2 id="tituloPrincipal">PRINCIPAL</h2>

    <?php include "_modelos/aside.php"; ?> <br> <br> <br> <br> <!--Chamando o aside-->

    <section class="corpo-principal">
        <div id="fundoPrincipal"> <img src="_imagens/Fundo-Principal.jpg" alt="Fundo"> </div>

        <div id="doarTrocar">
            <h1>FAÇA JÁ A SUA COLABORAÇÃO</h1>

            <p>" Livro bom é aquele que a gente passa à diante o prazer da leitura não pode ser restrito. " -Caio Rossan</p>

            <a href="doacoes.php"> <img src="_imagens/icone-doar.png" alt="Imagem Doar" title="Doar" id="imgDoar"> </a>
            <a href="trocas.php"> <img src="_imagens/icone-trocar.png" alt="Imagem Trocar" title="Trocar" id="imgTrocar"> </a>
        </div>
    </section> <br> <br> <br> <br> <br>

    <?php include "_modelos/footer.php"; ?> <!--Chamando Footer-->
</body>
</html>

<?php 
else: //Senão, vai mandar novamente para a tela index
header("Location: index.php"); 
endif; 
?>