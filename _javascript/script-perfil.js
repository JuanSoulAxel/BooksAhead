/*=================FUNÇÃO MOSTRAR BOTÃO COM JQUERY=================*/
//As funções abaixo farão a interação do botão cadastrar

$("#imagemUsuario").click(function() { //Quando clicar na imagem do usuário
    $(".telaFundo").show() && $(".cadastrarImagem").show() && $(".rodape").hide(); //aparecer tela
} );

$("#btnFechar").click(function() { //Quando clicar no btnFechar
    $(".cadastrarImagem").hide() && $(".telaFundo").hide() && $(".rodape").show(); //desaparecer tela
} );