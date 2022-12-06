<?php //essa parte vai fazer aparecer todas as postagens feitas            
        global $pdo;

        if($pagina == "doacoes" || $pagina == "trocas")
        {
            if($pagina == "doacoes") { $tipo = "D"; }
            else if($pagina == "trocas") { $tipo = "T";}
            //selecione de cadastro o nome, sobrenome e imagem. Selecione de transacao livro, comentario e data. Das tabalas juntas cadastro e transacao. Onde o id de cadastro for igual ao id de transacao e o tipo da tabela transacao seja igual a 'D'. Ordenar pelas mais recentes.
            $sql = "SELECT cad.nome, cad.sobrenome, cad.imagem, tra.livro, tra.comentario, tra.datta, tra.iduser FROM cadastro cad join transacao tra WHERE cad.id = tra.iduser AND tra.tipo = :tipo ORDER BY tra.id DESC";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("tipo", $tipo);
        }
        else if($pagina == "perfil")
        {
            $sql = "SELECT cad.nome, cad.sobrenome, cad.imagem, tra.livro, tra.comentario, tra.datta, tra.iduser FROM cadastro cad join transacao tra WHERE cad.id = tra.iduser AND tra.iduser = :idUsuario ORDER BY tra.id DESC";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("idUsuario", $idUsuario); //Esse idUsuario é da página verifica.php que está sendo incluída no perfil.php
        }
        
        $sql->execute();

        while($dados = $sql->fetch(PDO::FETCH_ASSOC)) {        
        //Código específico pra colocar foto USER PADRÃO NAS LISTAGENS DOS LIVROS
         if($dados['imagem'] == null) 
        {
            $imagemUsuarioListagemLivros = "_imagens/USER_PADRAO/Foto-Usuario.png";
        }
        else 
        {
            $imagemUsuarioListagemLivros = "_fotos-transacao/fotos-usuarios/".$dados['iduser'].")".$dados['nome']."/".$dados['imagem'];
        }

    ?>
    <section class="corpo2 sumir"> <!--o jquery vai pegar esse sumir e desaparecer quando clicado em alguns itens-->
        <p id="dataPostagem"> <?php echo date("d/m/Y - H:i", strtotime($dados['datta'])); ?> </p> <br> <!--Essa função em PHP formata e pega somente a data -->
        
        <img id="imagemUsuario" src="<?php echo $imagemUsuarioListagemLivros; ?>" alt="Foto do Usuário">

        <label id="nomeUsuario"> <?php echo $dados['nome'] ." ". $dados['sobrenome']; ?> </label> <br> <br>

        <p id="comentarioUsuario"> <?php echo $dados['comentario']; ?> </p>
        <img id="imagemLivro" src="_fotos-transacao/livros/<?php echo $dados['iduser']; ?>)/<?php echo $dados['livro']; ?>" alt="Foto do Livro">

        <p id="bordaCorpo2"> </p>

        <p id="iconeDesejados"> <i class="fas fa-heart fa">  Eu Quero</i> </p> <!--Sempre se usa esse "fa" depois para pegar-->
        <p id="iconeDenunciar"> <i class="fas fa-bullhorn fa"> Denunciar</i> </p>
    </section> <br> <br>
<?php } ?> 