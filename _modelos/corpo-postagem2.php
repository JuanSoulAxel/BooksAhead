<?php
                    //Código específico pra colocar foto USER PADRÃO NAS LISTAGENS DOS LIVROS
                    if ($dados['imagem'] == null) 
                    {
                        $imagemUsuarioListagemLivros = "_imagens/USER_PADRAO/Foto-Usuario.png";
                    } 
                    else 
                    {
                        $imagemUsuarioListagemLivros = "_fotos-transacao/fotos-usuarios/" . $dados['iduser'] . ")" . $dados['nome'] . "/" . $dados['imagem'];
                    }
?>

<br> <br> <br>
<section class="corpo2 sumir">
                        <!--o jquery vai pegar esse sumir e desaparecer quando clicado em alguns itens-->
                        <p id="data-postagem"> <?php echo date("d/m/Y - H:i", strtotime($dados['datta'])); ?> <!--Essa função em PHP formata e pega somente a data --> </p> <br>

                        <img id="imagemUsuario-postagem" src="<?php echo $imagemUsuarioListagemLivros; ?>" alt="Foto do Usuário">
                        <label id="nomeUsuario-postagem"> <?php echo $dados['nome'] . " " . $dados['sobrenome']; ?> </label> <br> <br>
                        <p id="comentarioUsuario-postagem"> <?php echo $dados['comentario']; ?> </p>

                        <p id="bordaCorpo2"> </p>

                        <img id="imagemLivro" src="_fotos-transacao/livros/<?php echo $dados['iduser']; ?>)/<?php echo $dados['livro']; ?>" alt="Foto do Livro">

                        <p id="bordaCorpo2"> </p>

                        <a id="interacaoEuQuero" href="">Eu Quero</a>

                        <?php
                        if ($_SESSION['id'] == $dados['iduser']) //se o usuário atual for igual ao usuário que fez a postagem 
                        { 
                        ?>
                            <!--Enviando o ID por GET-->
                            <a href="_modelos/conf-del-post.php?id=<?php echo $dados['id']; ?>" id="interacaoDeletar">Deletar</a>

                        <?php
                        } 
                        else 
                        {
                        ?>
                            <a id="interacaoDenunciar" href="">Denunciar</a>
                        <?php
                        }
                        ?>
                        </section> <br> <br>