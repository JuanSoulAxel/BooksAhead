<link rel="stylesheet" href="style-geral.css">

<style> body { background-color: rgba(0, 0, 0, 0.7); } </style>

<!--Comfirmação da exclusão da postagem-->
<section id="telaDeConfirmacaoDeletar">
    <p>Deseja realmente apagar essa postagem?</p>
    <a id="botaoSimDeletar" href="../_php/deletar-transacao.php?id=<?php echo $_GET['id']; ?>">Sim</a> <!--Enviando o ID por GET-->
    <a id="botaoNaoDeletar" href="../perfil.php">Não</a>
</section>