<?php
global $pdo;
include_once("UsuarioClass.php");
include_once("verifica.php");

$idPost = $_GET['id']; //vai pegar o id da postagem

$contaCurtidas = $pdo->query("SELECT COUNT(*) count FROM curtidas WHERE iduser = '$idUsuario' AND id_post = '$idPost'")->fetch()["count"]; //contar quantos registros tem na tabela

if($contaCurtidas >= 1) 
{
    $curtirDescurtir = "descurtir";
}
else if($contaCurtidas == 0)
{
    $curtirDescurtir = "curtir";
}

$u = new Usuario;
$u->curtirPostagem($idPost, $idUsuario, $curtirDescurtir); 
?>