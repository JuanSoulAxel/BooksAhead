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
    border-radius: 1vh;    
    color: #000;
}   

#telaDeConfirmacaoDeletar p {
    font-weight: bold;
    margin-top: 2%;
    border-bottom: 1px solid #363636;
    margin-bottom: 10%;
    color: #000;
    font-family: Oswald, sans-serif;
    font-size: 1.5em;
}

#telaDeConfirmacaoDeletar a {
    text-decoration: none;
    margin-left: 1%;
    margin-right: 1%;
    float: right;
    width: 20%;
    padding: 1%;
    background-color: #8B0000;
    color: #fff;
    border-radius: 1vh;
    border: 2px solid #000;
}


#telaDeConfirmacaoDeletar a#botaoNaoDeletar:hover, #telaDeConfirmacaoDeletar a#botaoSimDeletar:hover {
    transform: scale(1.02);
    transition: 1s;
    background-color: #800000;
}
</style>

<!--Confirmação da exclusão da postagem, mandando para _utility/deletar-transacao.php-->
<section id="telaDeConfirmacaoDeletar">
    <p>Deseja realmente apagar essa postagem?</p>
    <a id="botaoSimDeletar" href="../_utility/deletar-transacao.php?id=<?php echo $_GET['id']; ?>">Sim</a> <!--Enviando o ID por GET-->
    <a id="botaoNaoDeletar" href="../perfil.php">Não</a>
</section>