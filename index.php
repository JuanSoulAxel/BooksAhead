<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site para estimular a troca ou doação de livros já usufruído pelo leitor">
    <meta name="keywords" content="Livros, Quadrinhos, Revistas, Troca, Doação, Leitor">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Juan Axel">

    <link rel="stylesheet" href="_css/style-index.css" type="text/css"/>
    <link rel="stylesheet" href="_modelos/style-geral.css" type="text/css"/>

    <!--Chamando fontes e o ícone do site-->
    <?php include "_modelos/fonts.php"; ?>

    <title>Books Ahead - Acesse já!</title>
</head> 
<body>
    <header class="cabecalho">
        <h1>Books Ahead</h1>
    </header>

    <section class="corpo">
        <form name="login" class="tela-login" action="logar.php" method="POST">
            <h2>ENTRAR</h2>
              
            <input type="text" placeholder="Email ou Usuário" id="txtEmailEntrar" name="txtEmailEntrar"> <br> <br>
            <input type="password" placeholder="Senha" id="txtSenhaEntrar" name="txtSenhaEntrar"> <br> <br>
            <button type="submit" id="btnEntrar" name="btnEntrar">Entrar</button>

            <p id=borda-corpo></p>
        </form>  
        <!--Esse tem que ficar fora para não dar problema com o link consultar.php-->
        <p id="cadastrar">Se ainda não se cadastrou <button id="btnCadastrar">cadastre-se agora</button> </p>     
    </section>

    <form name="cadastro" class="tela-cadastrar" action="cadastrar.php" method="POST">
        <a class="btnFechar"> <i class="fa fa-times"></i> </a>

        <h2>Cadastre-se</h2>

        <p id=borda-cadastrar></p>

        <!--Ajustei o máximo de dígitos que poderão ser digitados para não dar problema com o banco de dados-->
        <input type="text" placeholder="Nome" id="txtNome" name="txtNome" maxlength="30" required> <!--Required faz com que o campo seja obrigatório-->
        <input type="text" placeholder="Sobrenome" id="txtSobrenome" name="txtSobrenome" maxlength="30" required>
        <input type="text" placeholder="Email" id="txtEmail" name="txtEmail" maxlength="50">
        <input type="text" placeholder="Telefone" id="txtTelefone" name="txtTelefone" maxlength="11"> <!--Vou modificar para que o usuário cadastro o email ou telefone ou os dois-->
        <input type="password" placeholder="Senha" id="txtSenha" name="txtSenha" maxlength="20" required> 

        <select name="slcSexo">
            <option selected disabled value="">Selecione</option>
            <option value="F">Feminino</option>
            <option value="M">Masculino</option>
            <option value="N">Não declarado</option>
        </select>

        <input type="submit" id="btnCadastrar2" value="Cadastrar">

        <p id="comentario-cadastrar">Clicando em cadastrar você concorda com os nossos termos de segurança e política. Você receberá notificações pelo seu email, mas poderá desativá-las quando desejar.</p>
    </form>

    <!--Chamando Footer-->
    <?php include "_modelos/footer.php"; ?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="_javascript/script-index.js">
    
    </script> <!--Chamando _javascript-->
</body>
</html>