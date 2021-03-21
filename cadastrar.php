<?php
$nome = $_POST['txtNome'];
$sobrenome = $_POST['txtSobrenome'];
$email = $_POST['txtEmail'];
$telefone = $_POST['txtTelefone'];
$senha = $_POST['txtSenha'];
$sexo = $_POST['slcSexo'];


$strcon = mysqli_connect('127.0.0.1', 'juan', '123', 'booksahead') or die('Erro ao conectar no banco de dados');

$sql = "INSERT INTO cadastro (nome, sobrenome, email, telefone, senha, sexo) VALUES ('$nome', '$sobrenome', '$email', '$telefone', '$senha', '$sexo');";

mysqli_query($strcon, $sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon); //fechar connection

echo //abrindo com javascript em PHP!!!! 
"<script language='javascript' type='text/javascript'>
    alert('Usuário Cadastrado com sucesso'); 
    window.location.href='index.html';
</script>";
?>