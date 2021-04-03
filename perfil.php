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
     
    <!--Criando form para fazer atualização dos dados-->
    <form class="atualizarDados" method="POST" action="dados-usuario.php"> <!--O enctype avisa pro sistema que um arquivo está sendo enviado-->
        <a id="btnFechar2"> <i class="fa fa-times"></i> </a> <br>
        <p>Modifique aqui os seus dados cadastrais</p> <br>
        <img src="_imagens/icone-atualizar-imagem.png" alt="Icone Atualizar"> <br> <br> <br>
        <input type="text" placeholder="Novo nome" id="txtAtualizarNome" name="txtAtualizarNome" maxlength="30" required>
        <input type="text" placeholder="Novo sobrenome" id="txtAtualizarSobrenome" name="txtAtualizarSobrenome" maxlength="30" required> <br> <br>
        <input type="text" placeholder="Novo email" id="txtAtualizarEmail" name="txtAtualizarEmail" maxlength="50" required>
        <input type="text" placeholder="Novo telefone" id="txtAtualizarTelefone" name="txtAtualizarTelefone" maxlength="11" required> <br> <br>
        <input name="enviarArquivo2" id="enviarArquivo2" type="submit" value="Salvar"> <br>
    </form>

    <!--Criando form para fazer atualização da foto de capa-->
    <form class="cadastrarCapa" method="POST" action="capa-usuario.php" enctype="multipart/form-data"> <!--O enctype avisa pro sistema que um arquivo está sendo enviado-->
        <a id="btnFechar3"> <i class="fa fa-times"></i> </a> <br>
        <p>Escolha a sua foto de capa</p> <br>
        <img src="_imagens/icone-atualizar-imagem.png" alt="Icone Atualizar"> <br> <br> <br>
        <input type="file" name="arquivo3" id="escolherArquivo3" required> <br> <br>
        <input name="enviarArquivo3" id="enviarArquivo3" type="submit" value="Salvar">    
    </form>

    <!--Chamando o header-->
    <?php  include "_modelos/header.php"; ?>

    <!--Chamando o aside-->
    <?php include "_modelos/aside.php"; ?> <br> <br> <br> <br>
    
    <section class="corpo-perfil sumir">
        <div id="transacoes"> 
            <img id="suasDoacoes" src="_imagens/suas-doacoes.png" alt="Suas Doações">
            <img id="suasTrocas" src="_imagens/suas-trocas.png" alt="Suas Trocas">
            <img id="seusDesejados" src="_imagens/seus-desejados.png" alt="Seus Desejados">
        </div> 

        <img id="capaPerfil" src="_capas-usuarios/<?php echo $capaUsuario;?>" alt="">

        <div id="perfil">
            <!--Esse botão servirá para aparecer a tela editar dados-->
            <button id="editarInformacoes">EDITAR DADOS</button>
            <!--No img abaixo eu coloquei o diretório onde fica armazenado as fotos que os usuários cadastram, e após isso peguei com o php (verifica.php) a variável onde contém o nome do arquivo-->
            <img id="imagemUsuario" src="_fotos-usuarios/<?php echo $imagemUsuario;?>" alt="Foto do Usuário"> <br> <br>
            <label id="nomeUsuario"> <?php echo $nomeUsuario ." ". $sobrenomeUsuario ?> </label> <br> <br> <br> <br> <br>
            <!--Usei os dois com o id contato para reutilizar o código no css-->
            <label id="contato"> <?php echo "Email: ". $emailUsuario ?> </label>
            <label id="contato"> <?php echo "Telefone: ". $telefoneUsuario ?> </label>
        </div>
    </section> <br> <br> <br> <br> <br>
    
    <?php //essa parte vai fazer aparecer todas as postagens feitas            
        global $pdo;

        //selecione de cadastro o nome, sobrenome e imagem. Selecione de transacao livro, comentario e data. Das tabalas juntas cadastro e transacao. Onde o id de cadastro for igual ao id de transacao e o tipo da tabela transacao seja igual a 'D'. Ordenar pelas mais recentes.
        $sql = "SELECT cad.nome, cad.sobrenome, cad.imagem, tra.livro, tra.comentario, tra.datta FROM cadastro cad join transacao tra WHERE cad.id = tra.iduser AND tra.iduser = $idUsuario ORDER BY tra.id DESC";
        $sql = $pdo->prepare($sql);
        $sql->execute();

        while($dados = $sql->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <section class="corpo2">
        <p id="dataPostagem"> <?php echo date("d/m/Y - H:i", strtotime($dados['datta'])); ?> </p> <br> <!--Essa função em PHP formata e pega somente a data -->
        
        <img id="imagemUsuario" src="_fotos-usuarios/<?php echo $dados['imagem']; ?>" alt="">
        <label id="nomeUsuario"> <?php echo $dados['nome'] ." ". $dados['sobrenome']; ?> </label> <br> <br>

        <p id="comentarioUsuario"> <?php echo $dados['comentario']; ?> </p>
        <img id="imagemLivro" src="_fotos-livros-doar/<?php echo $dados['livro']; ?>" alt="Foto do Livro">

        <p id="bordaCorpo2"> </p>

        <p id="iconeDesejados"> <i class="fas fa-heart fa">  Eu Quero</i> </p> <!--Sempre se usa esse "fa" depois para pegar-->
        <p id="iconeDenunciar"> <i class="fas fa-bullhorn fa"> Denunciar</i> </p>
    </section> <br> <br>
    <?php } ?> 

    <!--Chamando Footer-->
    <?php include "_modelos/footer.php"; ?> <!--Ele vai chamar também as pastas do jQuery-->

    <script src="_javascript/script-perfil.js"> </script> <!--Chamando _javascript-->
</body>
</html>

<?php 
//Senão, vai mandar novamente para a tela index
else: 
header("Location: index.php"); 
endif; 
?>