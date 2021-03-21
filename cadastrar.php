<?php
$nome = $_POST['txtNome'];
$sobrenome = $_POST['txtSobrenome'];
$email = $_POST['txtEmail'];
$senha = $_POST['txtSenha'];

$strcon = mysqli_connect('127.0.0.1', 'juan', '123', 'booksahead') or die('Erro ao conectar no banco de dados');

$sql = "INSERT INTO cadastro (nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', '$senha');";

mysqli_query($strcon, $sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon); //fechar connection

echo "Cliente cadastrado com sucesso!";
?>