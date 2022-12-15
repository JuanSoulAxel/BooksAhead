//As funções abaixo farão a interação do botão editar informações
$("#seusDados").click(function () {
    $(".blocoMenu1").show() && $(".blocoMenu2").hide() && $(".blocoMenu3").hide();
});
$("#alterarSenha").click(function () {
    $(".blocoMenu2").show() && $(".blocoMenu1").hide() && $(".blocoMenu3").hide();
});
$("#suasPostagens").click(function () {
  $(".blocoMenu3").show() && $(".blocoMenu1").hide() && $(".blocoMenu2").hide();
});


//Função pra aparecer as três senhas digitadas
const input0 = document.querySelector("#senhaAtual");
const button0 = document.querySelector("#mostrarSenhaAtual");
button0.addEventListener('click', togglePass);

function togglePass() {
  if (input0.type == "password") {
    input0.type = "text";
    button0.src = "_imagens/olho-aberto.png";
  } else {
    input0.type = "password";
    button0.src = "_imagens/olho-fechado.png";
  }
}

const input2 = document.querySelector("#novaSenha");
const button2 = document.querySelector("#mostrarNovaSenha");
button2.addEventListener('click', togglePass2);

function togglePass2() {
  if (input2.type == "password") {
    input2.type = "text";
    button2.src = "_imagens/olho-aberto.png";
  } else {
    input2.type = "password";
    button2.src = "_imagens/olho-fechado.png";
  }
}

const input3 = document.querySelector("#confirmarNovaSenha");
const button3 = document.querySelector("#mostrarConfirmarNovaSenha");
button3.addEventListener('click', togglePass3);

function togglePass3() {
  if (input3.type == "password") {
    input3.type = "text";
    button3.src = "_imagens/olho-aberto.png";
  } else {
    input3.type = "password";
    button3.src = "_imagens/olho-fechado.png";
  }
}