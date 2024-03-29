<?php

    //Código específico pra colocar foto USER PADRÃO NAS LISTAGENS DOS LIVROS
    if ($item['imagem'] == null) 
    {
        $imagemUsuarioListagemLivros = "_imagens/USER_PADRAO/Foto-Usuario.png";
    } 
    else 
    {
        $imagemUsuarioListagemLivros = "_fotos-transacao/fotos-usuarios/" . $item['iduser'] . ")". "/" . $item['imagem'];
    }
?>

<br> <br> <br>
<section class="corpo2 sumir">
    <!--o jquery vai pegar esse sumir e desaparecer quando clicado em alguns itens-->
    <p id="data-postagem"> <?php echo date("d/m/Y - H:i", strtotime($item['datta'])); ?> <!--Essa função em PHP formata e pega somente a data --> </p> <br>

    <img id="imagemUsuario-postagem" src="<?php echo $imagemUsuarioListagemLivros; ?>" alt="Foto do Usuário">
    <label id="nomeUsuario-postagem"> <?php echo $item['nome'] . " " . $item['sobrenome']; ?> </label> <br> <br>
    <p id="comentarioUsuario-postagem"> <?php echo $item['comentario']; ?> </p>

    <p id="bordaCorpo2"> </p>

    <img id="imagemLivro" src="_fotos-transacao/livros/<?php echo $item['iduser']; ?>)/<?php echo $item['livro']; ?>" alt="Foto do Livro">

    <p id="bordaCorpo2"> </p>

    <?php
        //curtidas
        $id = $item['id'];
        $contaCurtidas = $pdo->query("SELECT COUNT(*) count FROM curtidas WHERE id_post = '$id' ")->fetch()["count"]; //contar quantos registros tem na tabela
    ?>

    <div id="interacaoQuantidades">
        <p id="quantidadeCurtidas"><?php echo $contaCurtidas; ?> likes</p>

        <p id="quantidadeComentarios">10 comentarios</p>
    </div>

    <div id="interacao">
        
        

        <a href="_utility/curtir.php?id=<?php echo $id?>" id="interacaoCurtir">Curtir</a>

        <a id="interacaoComentar">Comentar</a>

        <?php
            if ($_SESSION['id'] == $item['iduser']) //se o usuário atual for igual ao usuário que fez a postagem 
            { 
        ?>
            <!--Enviando o ID por GET-->
            <a href="_modelos/conf-del-post.php?id=<?php echo $item['id']; ?>" id="interacaoDeletar">Deletar</a>

            <?php
            } 
            else 
            {
            ?>
                <a id="interacaoDenunciar">Denunciar</a>
            <?php
            }
            ?>
    </div> <br> <br> <br>
</section> <br> <br>