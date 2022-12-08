<link rel="stylesheet" href="_css/style-geral.css">

<style> /*ESSE TEM SEU PRÓPRIO CSS*/
body { background-color: rgba(0, 0, 0, 0.7); } 


#telaDeConfirmacaoDeletar {
    position: absolute;
    top: 50%; /*essa e as duas outras linhas fazem o bloco ficar no centro de tudo e responsivo*/
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    width: 40%;
    height: 25vh;
    background: linear-gradient(to right, #FFFF00, #FF0000);
    border-radius: 10vh;    
    color: #000;
}   

#telaDeConfirmacaoDeletar p {
    margin-top: 5%;
    margin-bottom: 5%;
    color: #000;
    text-decoration: underline;
    font-family: Oswald, sans-serif;
    font-size: 1.5em;
}

#telaDeConfirmacaoDeletar a {
    width: 20%;
    margin-bottom: 3%;
    padding: 2.5%;
    background: linear-gradient(to right, #FF0000, #FFFF00);
    color: #000;
    border-radius: 10px;
    border: 2px solid #000;
}

#telaDeConfirmacaoDeletar a#botaoSimDeletar {
    float: left;
    margin-left: 20%;
}

#telaDeConfirmacaoDeletar a#botaoNaoDeletar {
    float: right;
    margin-right: 20%;
}

#telaDeConfirmacaoDeletar a#botaoNaoDeletar:hover, #telaDeConfirmacaoDeletar a#botaoSimDeletar:hover {
    transform: scale(1.05);
    transition: 1s;
}
</style>

<!--Confirmação da exclusão da postagem, mandando para _utility/deletar-transacao.php-->
<section id="telaDeConfirmacaoDeletar">
    <p>Deseja realmente apagar essa postagem?</p>
    <a id="botaoSimDeletar" href="../_utility/deletar-transacao.php?id=<?php echo $_GET['id']; ?>">Sim</a> <!--Enviando o ID por GET-->
    <a id="botaoNaoDeletar" href="../perfil.php">Não</a>
</section>