<?php //essa parte vai fazer aparecer todas as postagens feitas            
global $pdo;

if ($pagina == "doacoes" || $pagina == "trocas") 
{
    if ($pagina == "doacoes") { $tipo = "D"; } 
    else if ($pagina == "trocas") { $tipo = "T"; }

    //selecione de cadastro o nome, sobrenome e imagem. Selecione de transacao livro, comentario e data. Das tabelas juntas: cadastro e transacao. Onde o id de cadastro for igual ao id de transacao e o tipo da tabela transacao seja igual a 'D'. Ordenar pelas mais recentes.
    $sql = "SELECT cad.nome, cad.sobrenome, cad.imagem, tra.id, tra.livro, tra.comentario, tra.datta, tra.iduser FROM cadastro cad join transacao tra WHERE cad.id = tra.iduser AND tra.tipo = :tipo ORDER BY tra.id DESC";
    $sql = $pdo->prepare($sql);
    $sql->bindValue("tipo", $tipo);
} 

$sql->execute();

while ($dados = $sql->fetch(PDO::FETCH_ASSOC)) {
    include("_modelos/corpo-postagem2.php");
}
?>