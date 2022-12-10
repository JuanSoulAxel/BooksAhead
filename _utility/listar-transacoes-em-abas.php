<?php
include_once("verifica.php");

global $pdo;
?>  

<nav class="nav_tabs sumir">
    <ul> 
        <li>
            <input type="radio" name="tabs" class="rd_tabs" id="tab1">
            <label  id="lblTitulo1" for="tab1">Minhas Doações</label>
            <div class="content"> 
                <?php
                $tipo = "D";
                
                $pagina = 1;

                if(isset($_GET['pagina']))
                    $pagina = filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT);

                if (!$pagina)
                    $pagina = 1;

                $limite = 10; //quantidade de itens em cada página

                $inicio = ($pagina * $limite) - $limite;

                $registros = $pdo->query("SELECT COUNT(*) count FROM cadastro cad join transacao tra WHERE tipo = '$tipo' AND cad.id = tra.iduser")->fetch()["count"]; //contar quantos registros tem na tabela

                $paginas = ceil($registros / $limite); //pra saber o número de páginas vai pegar os registros e dividir pelo limite = 4. o ceil vai fazer o retorno ser inteiro: arredonda pra cima.

                $result = $pdo->query("SELECT cad.nome, cad.sobrenome, cad.imagem, tra.tipo, tra.id, tra.livro, tra.comentario, tra.datta, tra.iduser FROM cadastro cad join transacao tra WHERE cad.id = tra.iduser AND tra.tipo = '$tipo' AND tra.iduser = '$idUsuario' ORDER BY tra.id DESC LIMIT $inicio, $limite ")->fetchAll(); //LIMIT indice, quantidade de linhas que vai mostrar a partir dessa

                foreach($result as $item):
                ?>
                <article class="art1">
                    <?php include("_modelos/corpo-postagem2.php"); ?>
                </article>
                <?php
                endforeach; 
                ?>
                <div id="paginacaoPerfilDoacoes" >
                    <a id="primeiraPaginacao" href="?pagina=1"> Primeira </a>

                    <?php if($pagina>1): ?>
                    <a id="voltarPaginacao" href="?pagina= <?=$pagina-1 ?>"> << </a>
                    <?php endif; ?>

                    <a id="numeroPaginacao"> <?=$pagina?> </a>

                    <?php if($pagina<$paginas): ?>
                    <a id="passarPaginacao" href="?pagina= <?=$pagina+1 ?>"> >> </a>
                    <?php endif; ?> 
                    <a id="ultimaPaginacao" href="?pagina= <?=$paginas ?>"> Última </a>
                </div>
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab2">
                <label id="lblTitulo2" for="tab2">Minhas Trocas</label>
                <div class="content">
                    
                    <?php
                    $tipo = "T";

                    $pagina = 1;

                if(isset($_GET['pagina']))
                    $pagina = filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT);

                if (!$pagina)
                    $pagina = 1;

                $limite = 10; //quantidade de itens em cada página

                $inicio = ($pagina * $limite) - $limite;

                $registros = $pdo->query("SELECT COUNT(*) count FROM cadastro cad join transacao tra WHERE tipo = '$tipo' AND cad.id = tra.iduser")->fetch()["count"]; //contar quantos registros tem na tabela

                $paginas = ceil($registros / $limite); //pra saber o número de páginas vai pegar os registros e dividir pelo limite = 4. o ceil vai fazer o retorno ser inteiro: arredonda pra cima.

                $result = $pdo->query("SELECT cad.nome, cad.sobrenome, cad.imagem, tra.tipo, tra.id, tra.livro, tra.comentario, tra.datta, tra.iduser FROM cadastro cad join transacao tra WHERE cad.id = tra.iduser AND tra.tipo = '$tipo' AND tra.iduser = '$idUsuario' ORDER BY tra.id DESC LIMIT $inicio, $limite ")->fetchAll(); //LIMIT indice, quantidade de linhas que vai mostrar a partir dessa

                foreach($result as $item):
                ?>
                    <article class="art2">      
                        <?php include("_modelos/corpo-postagem2.php"); ?>
                    </article>
                <?php
                endforeach; 
                ?>
                <div id="paginacaoPerfilTrocas" >
                    <a id="primeiraPaginacao" href="?pagina=1"> Primeira </a>

                    <?php if($pagina>1): ?>
                    <a id="voltarPaginacao" href="?pagina= <?=$pagina-1 ?>"> << </a>
                    <?php endif; ?>

                    <a id="numeroPaginacao"> <?=$pagina?> </a>

                    <?php if($pagina<$paginas): ?>
                    <a id="passarPaginacao" href="?pagina= <?=$pagina+1 ?>"> >> </a>
                    <?php endif; ?> 
                    <a id="ultimaPaginacao" href="?pagina= <?=$paginas ?>"> Última </a>
                </div>
                </div>
            </li>
        </ul>
</nav>
<?php include "_modelos/footer.php"; ?> <!--Chamando Footer--> <!--Ele vai chamar também as pastas do jQuery--> 
