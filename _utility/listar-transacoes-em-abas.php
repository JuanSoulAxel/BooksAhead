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
                $tipos = "D";

                $sql = "SELECT cad.nome, cad.sobrenome, cad.imagem, tra.id, tra.livro, tra.comentario, tra.datta, tra.iduser FROM cadastro cad join transacao tra WHERE cad.id = tra.iduser AND tra.iduser = :idUsuario AND tra.tipo = :tipo ORDER BY tra.id DESC";
                $sql = $pdo->prepare($sql);
                $sql->bindValue("idUsuario", $idUsuario); //Esse idUsuario é da página verifica.php que está sendo incluída no perfil.php
                $sql->bindValue("tipo", $tipos);
                $sql->execute();

                while ($dados = $sql->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <article class="art1">
                    <?php include("_modelos/corpo-postagem2.php"); ?>
                </article>
                    <?php
                    }
                    ?>
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab2">
                <label id="lblTitulo2" for="tab2">Minhas Trocas</label>
                <div class="content">
                    
                    <?php
                    $tipow = "T";
                    
                    $sql = "SELECT cad.nome, cad.sobrenome, cad.imagem, tra.id, tra.livro, tra.comentario, tra.datta, tra.iduser FROM cadastro cad join transacao tra WHERE cad.id = tra.iduser AND tra.iduser = :idUsuario AND tra.tipo = :tipo ORDER BY tra.id DESC";
                    $sql = $pdo->prepare($sql);
                    $sql->bindValue("idUsuario", $idUsuario); //Esse idUsuario é da página verifica.php que está sendo incluída no perfil.php
                    $sql->bindValue("tipo", $tipow);
                    
                    $sql->execute();
                    while ($dados = $sql->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <article class="art2">
                        <?php include("_modelos/corpo-postagem2.php"); ?>
                    </article>
                    <?php
                    }
                    ?>  
                </div>
            </li>
        </ul>
</nav>
<?php include "_modelos/footer.php"; ?> <!--Chamando Footer--> <!--Ele vai chamar também as pastas do jQuery--> 
