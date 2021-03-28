/*=================FUNÇÃO MOSTRAR BOTÃO COM JQUERY=================*/
//As funções abaixo farão a interação do botão cadastrar

$("#fotoUsuario").click(function() { //Quando clicar na imagem do usuário
    $("#cadastrarImagem").show(); //aparecer tela
} );

$("#btnFechar").click(function() { //Quando clicar no btnFechar
    $("#cadastrarImagem").hide(); //desaparecer tela
} );