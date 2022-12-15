<?php
require '_utility/verifica.php'; //chamando verificacao (nao e preciso chamar conexao pq ja tem ela dentro de verificacao)
require_once '_utility/UsuarioClass.php'; //chamar somente uma vez o arquivo

if (isset($_SESSION['id']) && !empty($_SESSION['id'])): //se existir e ela for diferente de vazio vai executar o código para a tela principal
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site para estimular a troca ou doação de livros já usufruído pelo leitor">
    <meta name="keywords" content="Livros, Quadrinhos, Revistas, Troca, Doação, Leitor">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Juan Axel">

    <link rel="stylesheet" href="_css/style-configuracao.css" type="text/css"/>
    <link rel="stylesheet" href="_css/style-geral.css" type="text/css"/>

    <?php include "_modelos/fonts.php"; ?> <!--Chamando fontes e o ícone do site-->

    <title>Books Ahead - Configuração!</title>
</head>
<body>
    <?php  include "_modelos/header.php"; ?> <!--Chamando o header-->

    <section id="cabecalho-configuracao">
        <h1>DEFINIÇÕES</h1>
        <nav id="menu-configuracao">
            <ul>
                <li id="seusDados"> Seus dados </li>
                <li id="alterarSenha"> Alterar senha </li>
                <li id="suasPostagens"> Suas postagens </li>
                <li> Suas curtidas </li>
                <li> Suas mensagens </li>
                <li> Bloquear </li>
                <li> Localização </li>
                <li> Escape </li>
                <li> Ajuda </li>
            </ul>
        </nav>
    </section>
    <section class="blocoMenu1">
        <h1>Definições gerais da conta</h1>
        <form class="atualizarDados" method="POST" action="_utility/dados-usuario.php"> <!--O enctype avisa pro sistema que um arquivo está sendo enviado-->
            <p id="bordaCima"></p>    

            <p class="alinhar">Nome</p> &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="text" value="<?php echo $nomeUsuario ?>" id="txtAtualizarNome" name="txtAtualizarNome" class="dadosAtualizar" maxlength="30" required> <br> <br>
            
            <p class="bordaMeio"></p>

            <p class="alinhar">Sobrenome</p> 
            <input type="text" value="<?php echo $sobrenomeUsuario ?>" placeholder="Novo sobrenome" id="txtAtualizarSobrenome" name="txtAtualizarSobrenome" class="dadosAtualizar" maxlength="30" required> <br> <br>
            
            <p class="bordaMeio"></p>
            
            <p class="alinhar">Email</p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="text" value="<?php echo $emailUsuario ?>" placeholder="Novo email" id="txtAtualizarEmail" name="txtAtualizarEmail" maxlength="50" class="dadosAtualizar" required> <br> <br>
            
            <p class="bordaMeio"></p>

            <p class="alinhar">Telefone</p> &nbsp; &nbsp; &nbsp;
            <input type="text" value="<?php echo $telefoneUsuario ?>" placeholder="Novo telefone" id="txtAtualizarTelefone" name="txtAtualizarTelefone" maxlength="11" class="dadosAtualizar" required> <br> <br>
            
            <p id="bordaBaixo"></p>   
            
            <input type="submit" id="atualizarDados" value="Atualizar Dados">
        </form>
    </section>

    <section class="blocoMenu2">
    <h1>Alteração de senha</h1>
        <form class="alterarSenha" method="POST" action="_utility/alterar-senha.php"> <!--O enctype avisa pro sistema que um arquivo está sendo enviado-->
            <p id="bordaCima"></p>    

            <p class="alinhar">Senha atual</p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
            <input type="password" class="dadosAtualizar" id="senhaAtual" name="senhaAtual" required>
            <img src="_imagens/olho-fechado.png" id="mostrarSenhaAtual">
            <p class="bordaMeio"></p>

            
            <p class="alinhar">Nova senha</p> &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="password" class="dadosAtualizar" id="novaSenha" name="novaSenha" required>
            <img src="_imagens/olho-fechado.png" id="mostrarNovaSenha">
            <p class="bordaMeio"></p>
            

            <p class="alinhar">Confirmar nova senha</p>
            <input type="password" class="dadosAtualizar" id="confirmarNovaSenha" name="confirmarNovaSenha" required>
            <img src="_imagens/olho-fechado.png" id="mostrarConfirmarNovaSenha">


            <p id="bordaBaixo"></p>   

            <input type="submit" id="atualizarDados" value="Atualizar Senha">
        </form>
    </section>

    <section class="blocoMenu3">
        <h1>Postagem da sua conta</h1>
        <p id="bordaCima"></p>      
        <?php
            //Contando quantas postagens o usuário atual tem
            $contadorPostagensDoacoes = $pdo->query("SELECT COUNT(*) count FROM transacao WHERE iduser = '$idUsuario' AND tipo = 'D' ")->fetch()["count"];
            $contadorPostagensTrocas = $pdo->query("SELECT COUNT(*) count FROM transacao WHERE iduser = '$idUsuario' AND tipo = 'T' ")->fetch()["count"];
        ?>        
        <div id="infDoacoes">
            <h2>Doações</h2>
            <p>quantidade de postagens: <?= $contadorPostagensDoacoes; ?> </p>
            <p>Curtidas: </p>
            <p>Comentários: </p>
        </div>

        <div id="infTrocas">
            <h2>Trocas</h2>
            <p>quantidade de postagens: <?= $contadorPostagensTrocas; ?> </p>
            <p>Curtidas: </p>
            <p>Comentários: </p>
        </div> <br> <br> <br> <br> <br> <br> <br>

        <p id="bordaBaixo"></p>

        <p id="mensagemAgradecimento">Toda nossa equipe agradece muito pelas suas postagens e interações em nosso site!</p>
    </section>
    
    <?php include "_modelos/footer.php"; ?> <!--Chamando footer-->

    <script src="_javascript/script-configuracao.js"> </script> <!--Chamando _javascript-->
</body>
</html>

<?php
else: //Senão, vai mandar novamente para a tela index
    header("Location: index.php");
endif;
?>