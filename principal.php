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

    <?php include "_modelos/aside.php"; ?> <!--Chamando o aside-->
    <?php include "_modelos/aside-direito.php"; ?> <br> <br> <br> <!--Chamando o aside-direito-->

    <section class="corpo-principal">
        <p id="fraseLivros">" Livro bom é aquele que a gente passa à diante o prazer da leitura não pode ser restrito. " - Caio Rossan</p>
        
        <img src="_imagens/livros-principal.png"> <br> <br> <br> <br>
        
    </section>
    <section class="pdfsLinkados-dc">
            <h1>Histórias DC Download</h1>
            <p id="bordaPdfDownload"></p>

            <a href="https://drive.google.com/drive/u/1/folders/13mwaoPt_ksPv3A72itfVB-CmwW-r7tob">
            <h2 id="tituloHQ">A Piada Mortal <br>(1988)</h2>
            <img id="dcPDF" src="_imagens/dc-a-piada-mortal-pdf.jpg" alt="">
            </a>

            <a href="https://drive.google.com/drive/u/1/folders/13woeNkGSx4JR3ekxoorKHHtmSx_MMG-Q">
            <h2 id="tituloHQ">Watchmen <br>(1986-1987)</h2>
            <img id="dcPDF" src="_imagens/dc-whatchmen-pdf.jpg" alt="">
            </a>
            
            <a href="https://drive.google.com/drive/u/1/folders/1K7I6CpA2nhP-2Ci3gQnh13suYV5tJicH">
            <h2 id="tituloHQ">Ano Um <br>(1987)</h2>
            <img id="dcPDF" src="_imagens/dc-batman-ano-um-pdf.jpg" alt="">
            </a>

            <a href="https://drive.google.com/drive/u/1/folders/1I05mnHC9ViyIcnmQToBFBbmdnWgWAlBF">
            <h2 id="tituloHQ">A Espada de Azrael <br>(1993)</h2>
            <img id="dcPDF" src="_imagens/dc-a-espada-de-azrael-pdf.jpg" alt="">
            </a>

            <a href="https://drive.google.com/drive/u/1/folders/12ZYmm7QY4G3nvgDt2vupD83UTSe0ozIx">
            <h2 id="tituloHQ">III Guerra Mundial <br>(2008)</h2>
            <img id="dcPDF" src="_imagens/dc-III-guerra-mundial-pdf.jpg" alt="">
            </a>

            <a href="https://drive.google.com/drive/u/1/folders/13NtUCoC-OBmfmH0C4CgKY-zTdbJv1kxn">
            <h2 id="tituloHQ">Jovens Titãs <br>(2016)</h2>
            <img id="dcPDF" src="_imagens/dc-jovens-titas-pdf.jpg" alt="">
            </a>

            <a href="https://drive.google.com/drive/u/1/folders/15ImKAJGGGsiJ5mKfEINjD5KjF1JTjVA2">
            <h2 id="tituloHQ">Renascimento <br>(2009)</h2>
            <img id="dcPDF" src="_imagens/dc-renascimento-pdf.jpg" alt="">
            </a>

            <a href="https://drive.google.com/drive/u/1/folders/1N5Z1NeYde3S2ljiuQF4LpdhLTULkYCEC">
            <h2 id="tituloHQ">Reino do Amanhã <br>(1996)</h2>
            <img id="dcPDF" src="_imagens/dc-reino-do-amanha-pdf.jpg" alt="">
            </a>
    </section> <br> <br> <br>

    <section class="pdfsLinkados-marvel">
            <h1>Histórias Marvel Download</h1>
            <p id="bordaPdfDownload"></p>

            <a href="https://drive.google.com/drive/u/1/folders/1IN2UVdBobUooMj5Vnb9zZK_x2oXuuHPa">
            <h2 id="tituloHQ">Sedução Sombria <br>(2000)</h2>
            <img id="dcPDF" src="_imagens/marvel-seducao-sombria-pdf.jpg" alt="">
            </a>

            <a href="https://drive.google.com/drive/u/1/folders/18Rx3okZybtjB743cknv3pasTjkIEWMlV">
            <h2 id="tituloHQ">Deadpool vs Logan <br>(2017)</h2>
            <img id="dcPDF" src="_imagens/marvel-deadpool-vs-velho-logan-pdf.jpg" alt="">
            </a>
            
            <a href="https://drive.google.com/drive/u/1/folders/1JZdZ9511zIaNBC56sb5olx8aZkDdK83M">
            <h2 id="tituloHQ">Deadpool Mata Marvel <br>(2012)</h2>
            <img id="dcPDF" src="_imagens/marvel-deadpool-mata-marvel-pdf.jpg" alt="">
            </a>

            <a href="https://drive.google.com/drive/u/1/folders/1DNa-KMdGxx_K0XATOOp1RGomIEJ5UpNN">
            <h2 id="tituloHQ">E de Extinção <br>(2001)</h2>
            <img id="dcPDF" src="_imagens/marvel-e-de-extincao-pdf.jpg" alt="">
            </a>

            <a href="https://drive.google.com/drive/u/1/folders/1LtjmAYoNbevJ9mE9J9Y4wZRE7E5ZB6b-"> 
            <h2 id="tituloHQ">V-Force<br>(2015- 2016)</h2>
            <img id="dcPDF" src="_imagens/marvel-v-force-pdf.jpg" alt="">
            </a>

            <a href="https://drive.google.com/drive/u/1/folders/177JHcwm35jQqt47UpETnazEr5rxL7jiP">
            <h2 id="tituloHQ">A Saga do Infinito<br>(1990-1992)</h2>
            <img id="dcPDF" src="_imagens/marvel-saga-do-infinito-pdf.jpg" alt="">
            </a>

            <a href="https://drive.google.com/drive/u/1/folders/14zF-lNWejDkOWZd_g9PL1W1r89GjFns4">
            <h2 id="tituloHQ">Os Eternos <br>(1976)</h2>
            <img id="dcPDF" src="_imagens/marvel-os-eternos-pdf.jpg" alt="">
            </a>

            <a href="https://drive.google.com/drive/u/1/folders/1Csl63Yo4zkz7YZ7Rh5xJbmtRGMp0gnEQ">
            <h2 id="tituloHQ">Vingadores Selvagens <br>(2019)</h2>
            <img id="dcPDF" src="_imagens/marvel-vingadores-selvagens-pdf.jpg" alt="">
            </a>
    </section>


    <?php include "_modelos/footer.php"; ?> <!--Chamando Footer-->
</body>
</html>

<?php 
else: //Senão, vai mandar novamente para a tela index
header("Location: index.php"); 
endif; 
?>