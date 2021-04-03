/*=================FUNÇÃO MOSTRAR BOTÃO COM JQUERY=================*/
//As funções abaixo farão a interação do botão cadastrar

$("#btnCadastrar").click(function() { //Quando clicar no btnCadastrar
    $(".tela-cadastrar").show() && $(".corpo-index").hide() && $(".rodape").hide() && $(".telaFundo").show(); //vai aparecer a tela-cadastrar e sumir com o corpo e rodape
} );

$(".btnFechar").click(function() { //Quando clicar no btnFechar
    $(".tela-cadastrar").hide() && $(".corpo-index").show() && $(".rodape").show() && $(".telaFundo").hide(); //vai aparecer com o corpo e rodape e sumir com a tela cadastrar
} );

/*=================USANDO MÁSCARA COM AJAX PARA TELEFONE=================*/

$("input#txtTelefone").mask("(99) 9999-9999");