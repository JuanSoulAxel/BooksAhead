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

    <link rel="stylesheet" href="_css/style-doacoes.css">
    <link rel="stylesheet" href="_modelos/style-geral.css">

    <!--Chamando fontes e o ícone do site-->
    <?php include "_modelos/fonts.php"; ?>

    <title>Books Ahead - Doações</title>
</head>
<body>
    <?php include "_modelos/header.php"; ?> <br> <br> <br> <br> <br>
    
    <aside class="lateral">
        <a href="perfil.php">
        <div id="lateral-parte1">
            <img id="imagemUsuario" src="_fotos-usuarios/<?php echo $imagemUsuario;?>" alt="Foto do Usuário">
            <label id="nomeUsuario"> <?php echo $nomeUsuario ." ". $sobrenomeUsuario ?> </label>
        </div> 
        </a>
        <div id="lateral-parte2">
            <img src="_imagens/Autores-Favoritos.png" alt="Icone Autores Favoritos">
            <label>Autores Favoritos</label>
        </div>
        <div id="lateral-parte3">
            <img src="_imagens/Livros-Favoritos.png" alt="Icone Livros Favoritos">
            <label>Livros Favoritos</label>
        </div>
        <div id="lateral-parte4">
            <img src="_imagens/Amigos.png" alt="Icone Livros Favoritos">
            <label>Amigos</label>
        </div>
        <div id="lateral-parte5">
            <img src="_imagens/Grupos.png" alt="Icone Livros Favoritos">
            <label>Grupos</label>
        </div>
        <div id="lateral-parte6">
            <img src="_imagens/Comunidade.png" alt="Icone Livros Favoritos">
            <label>Comunidade</label>
        </div>
    </aside> <br>

    <section class="corpo">
        <form class="cadastrarLivro" method="POST" action="foto-livro-doar.php" enctype="multipart/form-data"> <!--O enctype avisa pro sistema que um arquivo está sendo enviado-->
            <div id="postagem-parte1">
                <img id="imagemUsuario" src="_fotos-usuarios/<?php echo $imagemUsuario;?>" alt="Foto do Usuário">
                <input name="txtComentario" type="text" placeholder="Poste aqui o livro para doar">
                <button id="btnPostar" type="submit">POSTAR</button>
            </div> <br>

            <p id="bordaCorpo"> </p> <br> <br>

            <div id="postagem-parte2">
                <input type="file" name="livro" id="escolherLivro" required> <br> <br>
            </div>
        </form>
    </section> <br> <br>

    <?php //essa parte vai fazer aparecer todas as postagens feitas            
        global $pdo;

        $array = array(); //criando array

        //selecione de cadastro o nome, sobrenome e imagem. Selecione de transacao livro, comentario e data. Das tabalas juntas cadastro e transacao. Onde o id de cadastro for igual ao id de transacao e o tipo da tabela transacao seja igual a 'D'. Ordenar pelas mais recentes.
        $sql = "SELECT cad.nome, cad.sobrenome, cad.imagem, tra.livro, tra.comentario, tra.datta FROM cadastro cad join transacao tra WHERE cad.id = tra.iduser AND tra.tipo = 'D' ORDER BY tra.id DESC";
        $sql = $pdo->prepare($sql);
        $sql->execute();


        while($dados = $sql->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <section class="corpo2">
        <p id="horarioPostagem"> <?php echo date("d/m/Y", strtotime($dados['datta'])); ?> </p> <!--Essa função em PHP formata e pega somente a data -->

        <img id="imagemUsuario" src="_fotos-usuarios/<?php echo $dados['imagem']; ?>" alt="Foto do Usuário">
        <label id="nomeUsuario"> <?php echo $dados['nome'] ." ". $dados['sobrenome']; ?> </label> <br> <br>

        <p id="comentarioUsuario"> <?php echo $dados['comentario']; ?> </p>
        <img id="imagemLivro" src="_fotos-livros-doar/<?php echo $dados['livro']; ?>" alt="Foto do Livro">
    </section> <br> <br>
    <?php } ?> 

    <?php include "_modelos/footer.php"; ?>
</body>
</html>

<?php 
//Senão, vai mandar novamente para a tela index
else: 
header("Location: index.php"); 
endif; 
?>