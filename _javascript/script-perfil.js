/*=================FUNÇÃO MOSTRAR BOTÃO COM JQUERY=================*/
//O ".sumir" eu usei dentro de classes já criadas para reutilizar os códigos


//As funções abaixo farão a interação do botão imagem
$("#imagemUsuario").click(function () { //Quando clicar na imagem do usuário
    $(".sumir").hide() && $(".telaFundo").show() && $(".cadastrarImagem").show(); //aparecer tela
});
$("#btnFechar").click(function () { //Quando clicar no btnFechar
    $(".cadastrarImagem").hide() && $(".telaFundo").hide() && $(".sumir").show(); //desaparecer tela
});


//As funções abaixo farão a interação do botão editar informações
$("#editarInformacoes").click(function () {
    $(".sumir").hide() && $(".telaFundo").show() && $(".atualizarDados").show();
});
$("#btnFechar2").click(function () { //Quando clicar no btnFechar
    $(".atualizarDados").hide() && $(".telaFundo").hide() && $(".sumir").show(); //desaparecer tela
});

//As funções abaixo farão a interação do botão editar capa perfil
$("#capaPerfil").click(function () {
    $(".sumir").hide() && $(".telaFundo").show() && $(".cadastrarCapa").show();
});
$("#btnFechar3").click(function () { //Quando clicar no btnFechar
    $(".cadastrarCapa").hide() && $(".telaFundo").hide() && $(".sumir").show(); //desaparecer tela
});

/*=================USANDO MÁSCARA COM AJAX PARA TELEFONE=================*/

$("input#txtAtualizarTelefone").mask("(99) 9999-9999");